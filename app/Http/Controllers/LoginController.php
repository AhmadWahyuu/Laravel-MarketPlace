<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // menampilkan halaman login
    public static function index(){
        return view('login.index',[
            'title'=>'Login',
            'active'=>'login'
        ]);
    }

    // menvalidasi inputan user apakah ada didalam database
    public function auth(Request $request){
        $data = $request->validate([
                'email'=>'required|email:dns',
                'password'=>'required'
            ]);
        if (Auth::attempt($data)){
            $request->session()->regenerate();
            if (Auth::user()->role_as == '1'){
                return redirect()->intended('/admin');
            }
            return redirect()->intended('/user/home');
        }

        return back()->with('loginerror','Login Failed');
    }

    // fitur logout
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerate();

        return redirect('/');
    }
}
