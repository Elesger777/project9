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
Route::get('test2', function () {
    return view('test2');
})->name('test2');
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('test2', function () {
    return view('test2');
})->name('test2');

Route::get('test', function () {
    return view('test');
})->name('test');

Route::post('/daxilet', 'App\Http\Controllers\testController@daxilet')->name('daxilet');
Route::get('/test', 'App\Http\Controllers\testController@siyahi')->name('test');
Route::get('/sil{id}', 'App\Http\Controllers\testController@sil')->name('sil');
Route::get('/delete{id}', 'App\Http\Controllers\testController@delete')->name('delete');


Route::post('/daxilet2', 'App\Http\Controllers\test2controller@daxilet2')->name('daxilet2');
Route::get('/test2', 'App\Http\Controllers\test2Controller@siyahi2')->name('test2');



