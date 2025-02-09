<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Login;
use App\Http\Livewire\Register;

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
//welcome
Route::get('/', function () {
    return view('welcome');
});

// login & register
Route::get('auth/login', Login::class)->name('Login');
Route::get('auth/register', Register::class)->name('Register');

// home
Route::get('/home', function () {
    return view('home');
});

