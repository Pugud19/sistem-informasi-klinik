<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
    // cek login admin dan user
    if ($user = Auth::user()) {
        if ($user->role == 'admin') {
            return redirect()->intended('dashboard');
        } elseif ($user->role == 'user') {
            return redirect()->intended('/');
        }
    }
    return view('login');
    }

    public function proses_login(Request $request){
        // fungsi memproses login
        request()->validate(
            [
                'username' => 'required',
                'password' => 'required',
            ]);

        $kredensil = $request->only('username','password');

            if (Auth::attempt($kredensil)) {
                $user = Auth::user();
                if ($user->role == 'admin') {
                    return redirect()->intended('dashboard');
                } elseif ($user->role == 'user') {
                    return redirect()->intended('/');
                }
                return redirect()->intended('/');
            }
            return redirect('login')
            ->withInput()
            ->withErrors(['login_gagal' => 'These credentials do not match our records.']);
    }

    public function logout(Request $request){
        // fungsi proses logout
        $request->session()->flush();
        Auth::logout();
        return Redirect('login');
    }
}
