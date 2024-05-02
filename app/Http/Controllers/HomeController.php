<?php

namespace App\Http\Controllers;

use App\Models\Ukt;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function dashboard(){
        $users = User::get();
        return view('adminpage.dashboard', compact('users'));
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
        $users = User::orderBy('NISN')->with('jurusan');

        if(request()->has('search')){
            $users = $users->where('name', 'like', '%' . request()->get('search', '') . '%');
        }
        return view('homepage.kelulusan',[
            'users' => $users->paginate(4)->withQueryString(),
        ]);
    }

    public function edit(int $id){
        $users = User::findOrFail($id);
        return view('adminpage.edit_data', compact('users'));
    }

    public function update(Request $request, int $id){
        $request->validate([
            'name' => 'required',
            'email' => 'required|string',
            'phone' => 'required|max:12|string'
        ]);

        User::findOrFail($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone
        ]);
        return redirect()->back()->with('status', 'data berhasil diubah');
    }

    public function destroy(int $id){
        $users = User::findOrFail($id);
        $users->delete();

        return redirect()->back()->with('status', 'data deleted');
    }

    public function showUserDetails()
    {
        // Memastikan bahwa pengguna telah login
        if (Auth::check()) {
            $userId = Auth::id();
            $users = User::with('jurusan','ukt')->find($userId);
            
    
            return view('homepage.details', compact('users'));
        } else {
            // Jika pengguna tidak login, redirect ke halaman login atau tampilkan pesan
            return redirect('/login')->with('error', 'Anda harus login terlebih dahulu!');
        }
    }

}
