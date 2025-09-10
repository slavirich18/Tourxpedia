<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Lcobucci\JWT\Configuration;
use Lcobucci\JWT\Signer\Hmac\Sha256;
use Lcobucci\JWT\Signer\Key\InMemory;

final class AuthController extends Controller
{
    public function signup(Request $request): JsonResponse
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email:rfc,dns|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        $user = new User;
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->save();

        return response()->json(['ok' => true, 'data' => ['id' => $user->id]], 201);
    }

    public function login(Request $request): JsonResponse
    {
        $data = $request->validate([
            'email' => 'required|email:rfc',
            'password' => 'required|string',
        ]);

        $user = User::query()->where('email', $data['email'])->first();

        if (! $user || ! Hash::check($data['password'], $user->password)) {
            return response()->json([
                'ok' => false,
                'error' => ['code' => 'INVALID_CREDENTIALS', 'message' => 'Wrong email or password'],
            ], 401);
        }

        // JWT (lcobucci/jwt ^4.x)
        $cfg = Configuration::forSymmetricSigner(
            new Sha256,
            InMemory::plainText(env('JWT_SECRET', 'dev-secret-change'))
        );

        $now = new \DateTimeImmutable('now', new \DateTimeZone('UTC'));

        $token = $cfg->builder()
            ->issuedBy(config('app.url') ?: 'tourxpedia')
            ->issuedAt($now)
            ->expiresAt($now->modify('+7 days'))
            ->withClaim('uid', $user->id)
            ->getToken($cfg->signer(), $cfg->signingKey());

        return response()->json([
            'ok' => true,
            'data' => [
                'token' => $token->toString(),
                'user' => [
                    'id' => $user->id,
                    'email' => $user->email,
                    'name' => $user->name,
                ],
            ],
        ]);
    }

    public function me(Request $request): JsonResponse
    {
        /** @var User|null $user */
        $user = $request->attributes->get('auth_user');

        if (! $user) {
            return response()->json([
                'ok' => false,
                'error' => ['code' => 'NO_USER', 'message' => 'Unauthenticated'],
            ], 401);
        }

        return response()->json([
            'ok' => true,
            'data' => [
                'id' => $user->id,
                'email' => $user->email,
                'name' => $user->name,
            ],
        ]);
    }
}
