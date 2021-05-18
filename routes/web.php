<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinkWController;
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

Route::get('/', [LinkWController::class, 'index']);
Route::get('/add', [LinkWController::class, 'add']);
Route::post('/add_action', [LinkWController::class, 'addAction'])->name('add_action');
Route::get('/remove/{id}', [LinkWController::class, 'remove']);

