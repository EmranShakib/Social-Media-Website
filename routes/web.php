<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use \App\Http\Controllers\Frontend\ProfileController;
use \App\Http\Controllers\Frontend\PostController;
use \App\Http\Controllers\Frontend\CommentController;
use \App\Http\Controllers\Frontend\PageController;
use \App\Http\Controllers\Frontend\EventController;
use \App\Http\Controllers\Frontend\FriendController;
use App\Http\Controllers\Admin\CategoryController;

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


// admin

Route::middleware(['auth','isAdmin'])->group(function () {


    Route::get('/dashboard1', [DashboardController::class, 'dashboard'])->name('dashboard1');
    Route::resource('categories', CategoryController::class)->only(['index','store']);
    Route::post('/categories/delete',[CategoryController::class,'delete'])->name('categories.delete');
});





// dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::resource('events', EventController::class)->middleware('auth');

// friends
Route::resource('friends', FriendController::class)->middleware('auth');
Route::post('/invite-friend', [FriendController::class, 'inviteFriend'])->name('invite.friend')->middleware('auth');
Route::get('/accept-invitation/{email}/{id}', [FriendController::class, 'acceptInvitation'])->name('accept.invitation');

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
