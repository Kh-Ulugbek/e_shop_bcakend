<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
//        User::create([
//            'email' => 'svr021099@gmail.com',
//            'name' => 'BiNGo',
//            'password' => bcrypt('password')
//        ]);
//        return response('true', 200);
        $info = [
            'email' => 'svr021099@gmail.com',
            'password' => 'password',
        ];
        if (Auth::attempt($info))
        {
            return response()->json([
                'data'=> Auth::user()
            ], 200);
        }
        throw new AuthenticationException();
    }
}
