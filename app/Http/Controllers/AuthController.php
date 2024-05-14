<?php

namespace App\Http\Controllers;

use App\Models\AdminMenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

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
    public function menuform(Request $request)
    {
        if ($request->id) {
            $data = AdminMenu::where('id', $request->id)->first();
        } else {
            $data = '';
        }
        return view('layouts.MenuForm', compact('data'));
    }
    public function menu_save(Request $request)
    {
        $validatedData = $request->validate([
            'menu_name' => 'required',
            'url' => 'required',
            'menu_type' => 'required',

        ]);
        if ($request->menu_id) {
            $formData = AdminMenu::where('id', $request->menu_id);
            $formData->update($validatedData);
        } else {

            AdminMenu::create($validatedData);
        }


        return redirect()->route('menu');
    }
    public function deleteFormData($id)
    {

        AdminMenu::where('id', $id)->delete();


        return redirect()->route('menu');
    }
    public function listmenu()
    {
        $allMenu = AdminMenu::all();
        return view('layouts.list', compact('allMenu'));
    }
}
