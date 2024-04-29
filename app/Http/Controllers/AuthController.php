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
            'password' => 'required|max:8|string',
            'NISN' => 'required|max:8|string',
            'jurusan' => 'required|string',
            'phone' => 'required|max:12|string'

        ])->validate();

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'NISN' => $request->NISN,
            'jurusan' => $request->jurusan,
            'phone' => $request->phone,
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

        $user = [
            'email' => $request->email,
            'password'=> $request->password,
            'role' => false
        ];

        $admin = [
            'email' => $request->email,
            'password' => $request->password,
            'role' => true
        ];



        if(Auth::attempt($user)) {
            return redirect('/');
        }elseif(Auth::attempt($admin)) {
            return redirect('/dashboard');
        } else {
            return back()->with('error', 'salah passta bos');
        } 
    }
}
