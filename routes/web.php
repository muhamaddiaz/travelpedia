<?php

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

Route::get('/', ['uses' => 'WisataController@intro']);

Auth::routes();

Route::get('/search-wisata', ['uses' => 'WisataController@cariWisata', 'as' => 'cari.wisata']);
Route::get('/wisata/{id}', ['uses' => 'WisataController@wisata', 'as' => 'wisata']);
Route::post('/search', ['uses' => 'WisataController@cari', 'as' => 'search']);
Route::post('/wisata', ['uses' => 'WisataController@commentWisata', 'as' => 'wisata.comment']);
Route::post('/wisata/hapusKomen', ['uses' => 'WisataController@hapusComment', 'as' => 'wisata.hapusKomen']);

Route::get('/home', 'HomeController@index')->name('home');
