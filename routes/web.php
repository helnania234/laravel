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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// admin
Route::get('admin/home', 'BookController@index')->name('admin.list');
Route::get('admin/delete/{id}', 'BookController@destroy')->name('admin.delete');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pembelian', 'HomeController@pembelian')->name('pembelian');
Route::get('/pembelian/tambah', 'HomeController@orang')->name('tambah');
Route::post('/pembelian/store', 'HomeController@store')->name('store');
Route::get('/orang', 'HomeController@orangs')->name('orang');
Route::get('/delete/{id}', 'HomeController@delete')->name('delete');
