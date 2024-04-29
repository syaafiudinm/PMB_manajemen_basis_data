<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(AuthController::class)->group(function(){
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
});

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard')->middleware('isAdmin');
Route::get('/dashboard_table', [HomeController::class, 'dashboardTable'])->name('dashboardTable')->middleware('isAdmin');
Route::get('/kelulusan', [HomeController::class, 'kelulusan'])->name('kelulusan');
Route::get('/ukt', [HomeController::class, 'ukt'])->name('ukt');

Route::get('mahasiswa/{id}/edit_data', [HomeController::class, 'edit'])->name('edit');
Route::put('mahasiswa/{id}/edit_data', [HomeController::class,'update'])->name('update');