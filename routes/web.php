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

Route::get('/', 'App\Http\Controllers\MemberController@index')->middleware(['auth']);

// Route::view('home', 'App\Http\Controllers\MemberController@index')->name('home');
Route::get('/home', 'App\Http\Controllers\MemberController@index')->middleware(['auth']);

Route::put('/edit/{id}', 'App\Http\Controllers\MemberController@update')->middleware(['auth']);

Route::get('/delete/{id}', 'App\Http\Controllers\MemberController@destroy')->middleware(['auth']);

Route::post('/create', 'App\Http\Controllers\MemberController@store')->middleware(['auth']);

Route::post('/search', 'App\Http\Controllers\MemberController@show')->middleware(['auth']);

Route::get('/logout', 'App\Http\Controllers\MemberController@logout')->middleware(['auth']);