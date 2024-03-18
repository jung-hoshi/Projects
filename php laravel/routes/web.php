<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\StaticController@index');
Route::get('/article/add', 'App\Http\Controllers\ArticleController@create');
Route::post('/article/add', 'App\Http\Controllers\ArticleController@store');
Route::get('/article/{id}/edit', 'App\Http\Controllers\ArticleController@edit');
Route::put('/article/{id}/edit', 'App\Http\Controllers\ArticleController@update');
Route::get('/article/{id}', 'App\Http\Controllers\ArticleController@show');
Route::delete('/article/{id}/delete', 'App\Http\Controllers\ArticleController@destroy')->name('article.destroy');



Route::get('/about-us', 'App\Http\Controllers\StaticController@about');






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
