<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function login_post(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $credentials = [
            'email' => $email,
            'password' => $password
        ];
        if(Auth::attempt($credentials)) {
            return redirect(route('admin.index'));
        }
    }

    public function register()
    {
        return view('auth.register');
    }

    public function register_post(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        
        User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
        ]);

        return redirect(route('admin.login'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect(url('/'));
    }
}
