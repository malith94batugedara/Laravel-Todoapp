<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/posts/store',[App\Http\Controllers\PostController::class, 'store'])->name('posts.store');

Route::get('/posts/{postId}/show',[App\Http\Controllers\PostController::class, 'show'])->name('posts.show');

Route::get('/posts/all',[App\Http\Controllers\HomeController::class, 'allPosts'])->name('posts.all');

Route::get('/posts/{postId}/edit',[App\Http\Controllers\PostController::class, 'edit'])->name('posts.edit');

Route::post('/posts/{postId}/update',[App\Http\Controllers\PostController::class, 'update'])->name('posts.update');

Route::get('/posts/{postId}/delete',[App\Http\Controllers\PostController::class, 'delete'])->name('posts.delete');

Route::get('/admin/dashboard',[App\Http\Controllers\Admin\DashboardController::class, 'index'])->middleware('admin')->name('admin.dashboard');