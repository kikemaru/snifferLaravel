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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::namespace('\\App\\Http\\Controllers\\Main\\')->group(function (){
//    Route::get('/', \App\Http\Controllers\Main\AboutController::class);
//});


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::middleware(['private'])->prefix('private')->group(function (){
    Route::get('/', \App\Http\Controllers\Private\IndexController::class)->name('private.index');
    Route::get('/log', \App\Http\Controllers\Private\LogController::class)->name('private.log');
    Route::get('/setting', \App\Http\Controllers\Private\SettingController::class)->name('private.setting');
});


