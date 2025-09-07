<?php declare(strict_types=1);

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Lcobucci\JWT\Configuration;
use Lcobucci\JWT\Signer\Hmac\Sha256;
use Lcobucci\JWT\Signer\Key\InMemory;
use Lcobucci\JWT\Validation\Constraint\ValidAt;
use Lcobucci\Clock\SystemClock;

final class JwtAuth
{
    public function handle(Request $request, Closure $next) {
        $hdr = $request->header('Authorization');
        if (!$hdr || !str_starts_with($hdr, 'Bearer ')) {
            return response()->json(['ok'=>false,'error'=>['code'=>'NO_TOKEN','message'=>'Missing token']], 401);
        }

        $cfg = Configuration::forSymmetricSigner(
            new Sha256(),
            InMemory::plainText(env('JWT_SECRET','dev-secret-change'))
        );
        $cfg->setValidationConstraints(new ValidAt(new SystemClock(new \DateTimeZone('UTC'))));

        try {
            $token = $cfg->parser()->parse(substr($hdr, 7));
            if (!$cfg->validator()->validate($token, ...$cfg->validationConstraints())) {
                return response()->json(['ok'=>false,'error'=>['code'=>'TOKEN_INVALID','message'=>'Token not valid at this time']], 401);
            }
            $uid = $token->claims()->get('uid');
            $user = User::find($uid);
            if (!$user) {
                return response()->json(['ok'=>false,'error'=>['code'=>'USER_NOT_FOUND','message'=>'User not found']], 401);
            }
            $request->attributes->set('auth_user', $user);
        } catch (\Throwable $e) {
            return response()->json(['ok'=>false,'error'=>['code'=>'BAD_TOKEN','message'=>'Invalid token']], 401);
        }

        return $next($request);
    }
}
