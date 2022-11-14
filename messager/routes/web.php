<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\messager\IjinController;
use App\Http\Controllers\print\messages;
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

Route::resource('message_ijin', IjinController::class);

Route::resource('profile', AuthController::class);

Route::get('home', [HomeController::class, 'home'])->name('home');
Route::get('home/{nip}', [HomeController::class, 'get_ijin'])->name('get.ijin');
Route::get('ijin', [HomeController::class, 'message_ijin'])->name('message.ijin');
Route::get('print_message1/{id}', [messages::class, 'print_ijin'])->name('message.1.print');