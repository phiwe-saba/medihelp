<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::prefix('admin')->middleware('auth', 'isAdmin')->group(function(){
    Route::get('/index', 'App\Http\Controllers\Admin\AdminController@index');
    Route::get('/index', 'App\Http\Controllers\Admin\SuburbController@index');
    Route::get('/suburb/create', 'App\Http\Controllers\Suburbs\SuburbsController@create');
    Route::post('/suburb/store', 'App\Http\Controllers\Suburbs\SuburbsController@store')->name('suburb.store');

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/suburb/create', 'App\Http\Controllers\Suburbs\SuburbsController@create');
Route::post('/suburb/store', 'App\Http\Controllers\Suburbs\SuburbsController@store')->name('suburb.store');
