<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //Menampilkan halama login
    public function showLogin(){
        return view('login');
    }
    //Memproses data login
    public function login(Request $request){
        $akun = $request-> validate(
            [
                'email' => 'required|email',
                'password' => 'required'
            ]
        );
        //Cek ke database, apakah akun cocok
        if (Auth::attempt($akun)){
            //Buat session
            $request->session()->regenerate();
            return redirect()->route('products.index');
        }
        //Jika email/password salah, kembali ke login dengan pesan "Error"
        return back()->withErrors(['login_error' => 'email atau password salah']);
    }
    //Proses logout
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
