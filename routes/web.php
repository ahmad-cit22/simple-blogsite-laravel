<?php

use App\Http\Controllers\BloggerController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\Events\Routing;
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

Auth::routes();

//backend routes
Route::get('/home', [HomeController::class, 'home'])->name('home');

//user related routes
Route::get('/users', [UserController::class, 'users'])->name('users');
Route::get('/users/delete/{user_id}', [UserController::class, 'user_delete'])->name('user.delete');
Route::get('/bloggers', [UserController::class, 'bloggers'])->name('bloggers');
Route::get('/bloggers/delete/{blogger_id}', [UserController::class, 'blogger_delete'])->name('blogger.delete');

Route::get('/posts', [UserController::class, 'posts'])->name('posts');



// ======================================================================


// frontend routes
Route::get('/', [FrontendController::class, 'index']);

// blogger related routes
Route::get('/blogger-sign-in-login', [BloggerController::class, 'blogger_reg_view'])->name('blogger.reg');
Route::post('/blogger-reg', [BloggerController::class, 'blogger_signup'])->name('blogger.signup');
Route::post('/blogger-login', [BloggerController::class, 'blogger_login'])->name('blogger.login');
Route::get('/blogger-logout', [BloggerController::class, 'blogger_logout'])->name('blogger.logout');

// Post related routes

Route::post('/blog/store', [PostController::class, 'blog_store'])->name('blog.store');
Route::get('/blog/view/{post_id}', [PostController::class, 'blog_view'])->name('blog.view');
Route::get('/blog/delete/{post_id}', [PostController::class, 'blog_del'])->name('blog.del');
Route::get('/blog/edit/{post_id}', [PostController::class, 'blog_edit'])->name('blog.edit');
Route::post('/blog/update/{post_id}', [PostController::class, 'blog_update'])->name('blog.update');
