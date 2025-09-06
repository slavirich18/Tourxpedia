<?php declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Lcobucci\JWT\Configuration;
use Lcobucci\JWT\Signer\Hmac\Sha256;
use Lcobucci\JWT\Signer\Key\InMemory;

final class AuthController extends Controller
{
    private Configuration $jwt;

    public function __construct() {
        $this->jwt = Configuration::forSymmetricSigner(
            new Sha256(),
            InMemory::plainText(env('JWT_SECRET', 'dev-secret-change'))
        );
    }

    public function signup(Request $r) {
        $data = $r->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'name' => 'nullable|string|max:120',
        ]);
        $u = User::create([
            'email' => $data['email'],
            'name' => $data['name'] ?? null,
            'password' => Hash::make($data['password'], ['memory'=>65536,'time'=>4,'threads'=>2]),
        ]);
        return response()->json(['ok'=>true,'data'=>['id'=>$u->id,'email'=>$u->email,'name'=>$u->name]], 201);
    }

    public function login(Request $r) {
        $data = $r->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        /** @var User|null $u */
        $u = User::where('email', $data['email'])->first();
        if (!$u || !Hash::check($data['password'], $u->password)) {
            return response()->json(['ok'=>false,'error'=>['code'=>'INVALID_CREDENTIALS','message'=>'Wrong email or password']], 401);
        }
        $now = new \DateTimeImmutable();
        $token = $this->jwt->builder()
            ->issuedAt($now)
            ->expiresAt($now->modify('+7 days'))
            ->withClaim('uid', $u->id)
            ->getToken($this->jwt->signer(), $this->jwt->signingKey());

        return response()->json(['ok'=>true,'data'=>['token'=>(string)$token]]);
    }

    public function me(Request $r) {
        $user = $r->attributes->get('auth_user');
        return response()->json(['ok'=>true,'data'=>['id'=>$user->id,'email'=>$user->email,'name'=>$user->name]]);
    }
}
