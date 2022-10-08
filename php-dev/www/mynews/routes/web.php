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


    // NewsController Classがみつからなかったのでテキストの内容でなく、Appから書くように修正
    Route::get('news/create', [NewsController::class, 'add']);
    // php09-4
    Route::get('profile/create', [ProfileController::class, 'add']);
    Route::get('profile/edit', [ProfileController::class, 'edit']);
});

// php09-3
Route::get('AAA', 'Admin\AAAController@bbb');

