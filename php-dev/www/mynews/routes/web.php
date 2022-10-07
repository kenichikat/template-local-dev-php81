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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function(){


    // NewsController Classがみつからなかったのでテキストの内容でなく、Appから書くように修正
    Route::get('news/create', 'App\Http\Controllers\Admin\NewsController@add');
    // php09-4
    Route::get('profile/create', 'App\Http\Controllers\Admin\ProfileController@add');
    Route::get('profile/edit', 'App\Http\Controllers\Admin\ProfileController@edit');
});

// php09-3
Route::get('AAA', 'Admin\AAAController@bbb');

