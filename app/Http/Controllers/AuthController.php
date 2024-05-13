<?php

namespace App\Http\Controllers;

use App\Models\AdminMenu;
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
            Session::put('toast', $toast);
            return redirect('/');
        } else {
            $toast =  [
                'type' => 'error',
                'message' => 'Invalid Credentials'
            ];
            Session::put('toast', $toast);
            return redirect()->back();
        }
    }
    public function logout()
    {
        Auth::logout();
        $toast =  [
            'type' => 'success',
            'message' => 'Logout Successfully'
        ];
        Session::put('toast', $toast);
        return redirect('/login');
    }
    public function adminMenu()
    {
        $allMenu = AdminMenu::all();
        return view('layouts.menu', compact('allMenu'));
    }
}
