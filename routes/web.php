<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use \App\Http\Controllers\Frontend\ProfileController;
use \App\Http\Controllers\Frontend\PostController;
use \App\Http\Controllers\Frontend\CommentController;
use \App\Http\Controllers\Frontend\PageController;

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
Route::get('/profiles',[ProfileController::class,'index'])->name('profiles.index')->middleware('auth');
Route::patch('/profiles/update/{id}',[ProfileController::class,'update'])->name('profiles.update')->middleware('auth');

// page
Route::get('/profiles/page',[PageController::class,'profile'])->name('profiles.page')->middleware('auth');
Route::get('/favourites/page',[PageController::class,'favourite'])->name('favourities.page')->middleware('auth');

 

// Posts
Route::resource('posts', PostController::class);
Route::post('posts/comment',[CommentController::class,'store'])->name('comments.store')->middleware('auth');


require __DIR__.'/auth.php';
