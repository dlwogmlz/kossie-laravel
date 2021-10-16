<?php

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

Route::get('/', 'App\Http\Controllers\HomeController@index');

Route::get('/hello', 'App\Http\Controllers\HomeController@hello');

Route::get('/contact', 'App\Http\Controllers\HomeController@contact');

Route::get('/projects', 'App\Http\Controllers\ProjectController@index');

// Route::prefix('tasks')->middleware('auth')->group(function () {
//     Route::get('/', 'App\Http\Controllers\TaskController@index');

//     Route::get('/create', 'App\Http\Controllers\TaskController@create');

//     Route::post('/', 'App\Http\Controllers\TaskController@store');

//     Route::get('/{task}', 'App\Http\Controllers\TaskController@show');

//     Route::get('/{task}/edit', 'App\Http\Controllers\TaskController@edit');

//     Route::put('/{task}', 'App\Http\Controllers\TaskController@update');

//     Route::delete('/{task}', 'App\Http\Controllers\TaskController@destroy');

// });
Route::resource('tasks', 'App\Http\Controllers\TaskController')->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
