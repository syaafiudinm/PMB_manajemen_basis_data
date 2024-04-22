<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(){
        return view('homepage.register');
    }

    public function registerSave(Request $request){
        Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|string',
            'password' => 'required|max:8|string'
        ])->validate();

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => "0"
        ]);


        return redirect()->route('login');
    }

    public function login(){
        return view('homepage.login');
    }

    public function loginAction(Request $request){

        $request->validate([
            'email' => 'required|string',
            'password' => 'required|max:8|string'
        ]);

        $credentials = [
            'email' => $request->email,
            'password'=> $request->password
        ];

        if(Auth::attempt($credentials)) {
            return redirect('/');
        }
        return back()->with('error', 'email atau password salah');
    }
}
