<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\HelloWord;
use App\Http\Controllers\News;
use App\Http\Controllers\Newscontrollers;
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

Route::post('/admin/create', [Admin::class, 'create'])->name('admin.create');

Route::get('/admin/new', [Admin::class, 'new'])->name('admin.new');

Route::get('/admin/feedback', [Admin::class, 'feedback'])->name('admin.feedback');

Route::get('/news', [Newscontrollers::class, 'news']);

Route::get('/news/{id}', [Newscontrollers::class, 'newsOne']);