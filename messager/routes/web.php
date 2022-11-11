<?php

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

Route::resource('message_1', IjinController::class);

Route::get('home', function(){
    return view('home');
})->name('home');
Route::get('print_message1', [messages::class, 'print_ijin'])->name('message.1.print');