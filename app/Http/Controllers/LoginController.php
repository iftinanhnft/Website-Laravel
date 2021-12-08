<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login', ["siteTitle" => "Login"]);
    }

    public function proses_login(Request $request)
    {
        $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->level == 'admin') {
                return redirect()->intended('dashboard');
            } elseif ($user->level == 'pegawai') {
                return redirect()->intended('dashboard');
            }
            return redirect ->intended('/');
        }
        return redirect('login')->withSuccess('Oppes! Silahkan Cek Inputanmu');
    }

    public function logout(Request $request) {
        $request->session()->flush();
        Auth::logout();
        return Redirect('home');
    }
}
