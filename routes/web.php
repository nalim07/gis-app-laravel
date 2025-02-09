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
Route::get('/login', function () {
    return view('auth.login');
})->name('Login');
Route::get('/register', function () {
    return view('auth.register');
})->name('Register');

// home
Route::get('/home', function () {
    return view('home');
});
