<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use \App\Http\Controllers\Frontend\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// homepage
Route::get('/', function () {
    return view('homepage');
})->name('homepage')->middleware('guest');


// authentication page route

Route::get('/login', function () {
    return view('auth.login');
})->name('login.page')->middleware('guest');
Route::get('/register', function () {
    return view('auth.register');
})->name('register.page')->middleware('guest');

// dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

// profile
Route::get('/profile',[ProfileController::class,'index'])->name('profile.index')->middleware('auth');


require __DIR__.'/auth.php';
