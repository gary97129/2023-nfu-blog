<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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
Route::get('/', [PostsController::class, 'get_index_page'])->name('get_index_page');

Route::get('/create',[PostsController::class, 'get_create_page'])
    ->name('get_create_page');
Route::post('/create',[PostsController::class, 'store_create_data'])
    ->name('store_create_data');

Route::get('/content',[PostsController::class, 'get_content_page'])
    ->name('get_content_page');

Route::get('/update',[PostsController::class, 'get_update_page'])
    ->name('get_update_page');
Route::post('/update',[PostsController::class, 'store_update_data'])
    ->name('store_update_data');

Route::get('/delete',[PostsController::class, 'delete_data'])
    ->name('delete_data');
