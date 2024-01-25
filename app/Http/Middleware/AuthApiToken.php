<?php

namespace App\Http\Middleware;

use App\Services\Authentication\AuthenticateManager;
use Closure;
use Illuminate\Http\Request;

class AuthApiToken
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // $token = $request->header('token');
        // if (!$token) {
        //     $token = $request->token;
        //     return response()->json([
        //         'cod' => '01',
        //         'msg' => 'Token not found'
        //     ]);
        // }
        // aqui la logica de auth token:

        //$login = AuthenticateManager::validateToken($token);

//        if ($login['cod'] !=='00') {
//            return response()->json($login);
//        }

        return $next($request);
    }
}
