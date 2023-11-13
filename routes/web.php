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
    Route::get('/suburb/index', 'App\Http\Controllers\Admin\SuburbController@index')->name('admin/suburb.index');
    Route::get('/suburb/create', 'App\Http\Controllers\Admin\SuburbController@create');
    Route::post('/suburb/store', 'App\Http\Controllers\Admin\SuburbController@store')->name('admin.suburb.store');
    Route::get('/nurse/create', 'App\Http\Controllers\Admin\NurseController@create');
    Route::post('/nurse/store', 'App\Http\Controllers\Admin\NurseController@store')->name('admin.nurse.store');
    Route::get('/medicalaid/create', 'App\Http\Contrllers\Admin\MedicalAidController@create');
    Route::post('/medicalaid/store', 'App\Http\Controllers\Admin\MedicalAidController@store')->name('admin.medicalaid.store');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Route::get('/suburb/create', 'App\Http\Controllers\Suburbs\SuburbsController@create');
//Route::post('/suburb/store', 'App\Http\Controllers\Suburbs\SuburbsController@store')->name('suburb.store');
