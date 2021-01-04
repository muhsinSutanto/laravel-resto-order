<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestoController;

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

Route::get('/resto', [RestoController::class, 'index']);
Route::get('/resto/create', [RestoController::class, 'create'])->name('resto.create');
Route::post('/resto', [RestoController::class, 'store']);
Route::get('/resto/{id}', [RestoController::class, 'show']);
Route::delete('/resto/{id}', [RestoController::class, 'destroy']);

Auth::routes([
    'register'=>false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
