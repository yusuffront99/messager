<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\messager\CutiBesarController;
use App\Http\Controllers\messager\CutiTahunanController;
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
Route::resource('message_cutiTahunan', CutiTahunanController::class);
Route::resource('message_cutiBesar', CutiBesarController::class);

Route::resource('profile', AuthController::class);

Route::get('home', [HomeController::class, 'home'])->name('home');
Route::get('home/{nip}', [HomeController::class, 'get_ijin'])->name('get.ijin');
Route::get('ijin', [HomeController::class, 'message_ijin'])->name('message.ijin');

Route::get('print_message1/{id}', [messages::class, 'print_ijin'])->name('message.1.print');
Route::get('print_message1_ttd/{id}', [messages::class, 'print_ijin_nottd'])->name('message.1.print_ttd');

Route::get('print_message2/{id}', [messages::class, 'print_cutiTahunan'])->name('message.2.print');
Route::get('print_message2_ttd/{id}', [messages::class, 'print_cutiTahunan_nottd'])->name('message.2.print_ttd');

Route::get('print_message3/{id}', [messages::class, 'print_cutiBesar'])->name('message.3.print');
Route::get('print_message3_ttd/{id}', [messages::class, 'print_cutiBesar_nottd'])->name('message.3.print_ttd');