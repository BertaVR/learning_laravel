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
Route::resource('items', 'App\Http\Controllers\ItemController');


Route::get('/', function () {
    return view('welcome');
});


//Route::post('/formulario', 'App\Http\Controllers\ItemController@store')->name('añadeItem');

Auth::routes();

Route::fallback(function () {
   return redirect()->route('home');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
