<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    function index(){
        return view('web_service.login');
    }

    function login(Request $request){
        $credentials = $request->only('name', 'password');
        
        if(auth()->attempt($credentials)){
            return redirect()->route('dashboard');
        }

        return redirect()->route('login')->with('error', 'ログインに失敗しました');
    }

    function logout(){
        auth()->logout();
        return redirect()->route('web_service');
    }
}
