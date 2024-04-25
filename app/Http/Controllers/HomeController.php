<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard(){
        return view('adminpage.dashboard');
    }
    public function index(){
        return view('homepage.index');
    }

    public function kelulusan(){
        $users = User::orderBy('NISN');

        if(request()->has('search')){
            $users = $users->where('name', 'like', '%' . request()->get('search', '') . '%');
        }
        return view('homepage.kelulusan',[
            'users' => $users->paginate(4)->withQueryString()
        ]);
    }
}
