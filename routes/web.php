<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\HelloWord;
use App\Http\Controllers\News;
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

Route::get('/hello', [HelloWord::class, 'hello']);

Route::get('/admin', [Admin::class, 'login']);

Route::get('/news', [News::class, 'news']);

Route::get('/news/{id}', [News::class, 'newsOne']);