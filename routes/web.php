<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;
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


Route::get('/','PagesController@index');
Route::get('/',[PagesController::class,'index']);

Route::get('/about','PagesController@about');
Route::get('/about',[PagesController::class,'about']);

Route::get('/services','PagesController@services');
Route::get('/services',[PagesController::class,'services']);


//posts routes
Route::get('/posts','PostController@index')->name('posts.index');
Route::get('/posts',[PostController::class,'index']);

//post create
Route::get('/posts/create','PostController@create')->name('posts.create');
Route::get('/posts/create',[PostController::class,'create']);
//post store
Route::post('/posts','PostController@store')->name('posts.store');
Route::post('/posts',[PostController::class,'store']);
//post show
Route::get('/posts/{id}','PostController@show')->name('posts.show');
Route::get('/posts/{id}',[PostController::class,'show']);
//edit post
Route::get('/posts/{id}/edit','PostController@edit')->name('posts.edit');
Route::get('/posts/{id}/edit',[PostController::class,'edit']);
//update post
Route::put('/posts/{id}','PostController@update')->name('posts.update');
Route::put('/posts/{id}',[PostController::class,'update']);
//delete post
Route::delete('/posts/{id}','PostController@destroy')->name('posts.destroy');
Route::delete('/posts/{id}',[PostController::class,'destroy']);
// Route::get('/about', function () {
//     return view('pages.about');
// });


// Route::get('/posts/{id}/{author}', function ($id, $author) {
//     return "The post with id ". $id . ' has author name ' . $author ;
// });
Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/dashboard',[DashboardController::class,'index']);
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
