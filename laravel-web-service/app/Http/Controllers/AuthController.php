<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    function index(){
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }
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
