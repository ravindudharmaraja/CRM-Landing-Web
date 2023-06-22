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
Route::get('/contact', [App\Http\Controllers\Controller::class, 'contacts'])->name('/contact');
Route::get('/home', [App\Http\Controllers\Controller::class, 'home'])->name('/home');
Route::get('/feature', [App\Http\Controllers\Controller::class, 'feature'])->name('/feature');
Route::get('/pricing', [App\Http\Controllers\Controller::class, 'pricing'])->name('/pricing');

Route::get('/', function () {
    return view('welcome');
});
