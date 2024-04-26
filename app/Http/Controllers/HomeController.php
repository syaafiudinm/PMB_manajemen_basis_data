<?php

namespace App\Http\Controllers;

use App\Models\Ukt;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard(){
        return view('adminpage.dashboard');
    }

    public function dashboardTable(){
        $users = User::orderBy('NISN');

        if(request()->has('search')){
            $users = $users->where('name', 'like', '%' . request()->get('search', '') . '%');
        }
        return view('adminpage.dashboardTable',[
            'users' => $users->paginate(4)->withQueryString()
        ]);
    }
    public function index(){
        return view('homepage.index');
    }

    public function ukt(){
        $ukts = Ukt::get();
        return view('homepage.ukt', compact('ukts'));
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
