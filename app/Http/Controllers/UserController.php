<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        echo $email . $password;
        $user = User::where(
            [

                'password' => $password
            ]
        )
            ->firstOrFail();

        return $user;
    }
}