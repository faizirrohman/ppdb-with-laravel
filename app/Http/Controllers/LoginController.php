<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function postlogin(Request $request){
        if (Auth::attempt($request->only('email' , 'password'))){
            return redirect()->route('admin.registrasi.index');
        }
        return redirect('loginn');
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/loginn');
    }

    public function register(){
        return view('pengguna.register');
    }

    public function simpanRegistrasi(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60)
        ]);  
        return redirect()->route('admin.registrasi.index');
    }
}
