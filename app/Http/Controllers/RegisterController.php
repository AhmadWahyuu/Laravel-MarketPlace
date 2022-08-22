<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    // menampilkan halaman registrasi
    public static function index(){
        return view('regist.index',[
            'title'=>'Register',
            'active'=>'register'
        ]);
    }

    // menyimpan inputan user kedalam database
    public function store(Request $request){
        $validated = $request->validate([
            'nama'=>'required|max:255',
            'username'=> ['required','min:3','max:255','unique:users'],
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max:255'
        ]);
        $validated['password'] = bcrypt($validated['password']);
        User::create($validated);

        return redirect('/login')->with('success','Registration SuccessFull Pleace Login!');
    }

    
}
