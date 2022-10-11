<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ProfileController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function(){


    // ver.8 から書き方変わっている https://laravel.com/docs/8.x/routing#the-default-route-files 
    // Route::get('news/create', [NewsController::class, 'add']);
    Route::get('news/create', 'App\Http\Controllers\Admin\NewsController@add')->middleware('auth');
    // php09-4
    Route::get('profile/create', [ProfileController::class, 'add']);
    Route::get('profile/edit', [ProfileController::class, 'edit']);
});

// php09-3
Route::get('AAA', 'Admin\AAAController@bbb');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
