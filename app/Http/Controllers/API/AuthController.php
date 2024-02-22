<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __costruct()
    {
        $this->middleware('auth:api')->except('login'); 
    }

    public function login()
    {
        $credentials = $request->only(['email', 'password']);
        if(!$token = auth('api')->attempt($credentials)){
            return response()->json(['error'=> 'Unauthorized'], 401);
        }
        return $this->respondWithToken($token); 
    }

    public function user()
    {
        return response()->json(auth('api')->user());
    }

    public function logout()
    {

    }

    public function refresh()
    {

    }

    public function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'type' => 'Bearer',
            'expires_in' => \Config::get('jwt.ttl') * 60
        ]);
    }
}
