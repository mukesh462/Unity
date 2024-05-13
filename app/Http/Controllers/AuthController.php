<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $value = Auth::attempt(['username' => $request->username, 'password' => $request->password]);

        if ($value) {
            $toast =  [
                'type' => 'success',
                'message' => 'Welcome Back !'
            ];
        } else {
            $toast =  [
                'type' => 'error',
                'message' => 'Invalid Credentials'
            ];
        }



        Session::put('toast', $toast);
        return redirect('/');
    }
}
