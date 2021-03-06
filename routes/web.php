<?php

use App\Http\Controllers\BookController;
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

Route::get('/books', [BookController::class, 'index']);
Route::post('/book', [BookController::class, 'store']);
Route::patch('/updatebook/{book}', [BookController::class, 'update']);
Route::delete('/deletebook/{book}', [BookController::class, 'delete']);
