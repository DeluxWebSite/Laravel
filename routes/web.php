<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\AdminNewsController;
use App\Http\Controllers\DBController;
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

// Route::get('/admin', [Admin::class, 'login']);

// Route::get('/admin/create', [Admin::class, 'create'])->name('admin.create');

// Route::get('/admin/new', [Admin::class, 'new'])->name('admin.new');

// Route::get('/admin/feedback', [Admin::class, 'feedback'])->name('admin.feedback');

Route::get('/news', [Newscontrollers::class, 'news'])->name('news');

Route::get('/news/{id}', [Newscontrollers::class, 'newsOne'])->name('newsOne');

Route::get('/category/{category_id}', [Newscontrollers::class, 'list'])
    ->where('categiry_id', '[0-9]+')
    ->name('list');

Route::get('/db', [DBController::class, 'index']);

Route::group([
    'prefix' => '/admin/news',
    'as' => 'admin::news::'
], function () {
    Route::get('/', [AdminNewsController::class, 'index'])
        ->name('index');

    Route::get('/create', [AdminNewsController::class, 'create'])
        ->name('create');

    Route::post('/save', [AdminNewsController::class, 'save'])
        ->name('save');

    Route::get('/update/{news}', [AdminNewsController::class, 'update'])
        ->where('news', '[0-9]+')
        ->name('update');

    Route::get('/delete/{id}', [AdminNewsController::class, 'delete'])
        ->where('id', '[0-9]+')
        ->name('delete');
});