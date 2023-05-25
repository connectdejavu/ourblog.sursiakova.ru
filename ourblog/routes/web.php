<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UsersController;

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



Route::get('/admin', [UsersController::class,'adminUserInfo']);


Route::get('/', [PostsController::class, 'post'])->name("main");

Auth::routes();

Route::get('/blog', [App\Http\Controllers\HomeController::class, 'index'])->name('blog');

//добавление записи
Route::get('/blog/add',[HomeController::class,'showAddPostsForm'])->name('post.add');
Route::post('/blog',[HomeController::class, 'blogPost'])->name('post.blog');


//редактирование записи
Route::get('/blog/{post}/edit',[HomeController::class,'showEditPostsForm'])->name('post.edit');
Route::patch('/blog/{post}',[HomeController::class, 'updatePost'])->name('post.update');

//удаление записи
Route::get('/blog/{post}/delete',[HomeController::class,'showDeletePostsForm'])->name('post.delete');
Route::delete('/blog/{post}',[HomeController::class, 'destroyPost'])->name('post.destroy');





Route::get('/post/{post}', [PostsController::class, 'detail'])->name("detail");


