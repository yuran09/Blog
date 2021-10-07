<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController2;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController2;
use App\Http\Controllers\Auth\LogoutController2;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\UserPostController;

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

Route::get('/', function (){
    return view('home');
})->name('/');

Route::post('/logout2', [LogoutController2::class, 'store'])->name('logout2');

Route::get('/users/{user:username}/posts', [UserPostController::class, 'index'])->name('users.posts');

Route::get('/login2', [LoginController2::class, 'index'])->name('login2');
Route::post('/login2', [LoginController2::class, 'store'])->name('login_store');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/register2', [RegisterController2::class, 'index'])->name('register');
Route::post('/register2', [RegisterController2::class, 'store'])->name('storeRegister');

Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::post('/posts', [PostController::class, 'store']);
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::post('/posts/{post}/likes', [PostLikeController::class, 'store'])->name('posts.likes');
Route::delete('/posts/{post}/likes', [PostLikeController::class, 'destroy'])->name('posts.likes.destroy');

Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');



