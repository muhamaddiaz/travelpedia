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

Route::get('/', ['uses' => 'WisataController@intro', 'middleware' => 'guest']);

Auth::routes();

Route::get('/wisata/favorit', ['uses' => 'WisataController@favorit', 'as' => 'wisata.favorit']);
Route::get('/search-wisata', ['uses' => 'WisataController@cariWisata', 'as' => 'cari.wisata']);
Route::get('/wisata/{id}', ['uses' => 'WisataController@wisata', 'as' => 'wisata']);
Route::post('/wisata/{id}/rate', ['uses' => 'WisataController@rate', 'as' => 'rate.wisata']);
Route::post('/search', ['uses' => 'WisataController@cari', 'as' => 'search']);
Route::post('/wisata', ['uses' => 'WisataController@commentWisata', 'as' => 'wisata.comment']);
Route::post('/wisata/{id}/replykomentar', ['uses' => 'WisataController@replyComment', 'as' => 'reply.comment']);
Route::post('/wisata/hapusKomen', ['uses' => 'WisataController@hapusComment', 'as' => 'wisata.hapusKomen']);
Route::post('/wisata/hapusReply', ['uses' => 'WisataController@hapusReply', 'as' => 'wisata.hapusReply']);

Route::get('/admin', ['uses' => 'AdminController@index', 'as' => 'admin']);
Route::post('/admin/{id}/deleteWisata', ['uses' => 'AdminController@deleteWisata', 'as' => 'admin.deleteWisata']);
Route::post('/admin/{id}/updateWisata', ['uses' => 'AdminController@updateWisata', 'as' => 'admin.updateWisata']);
Route::get('/admin/{id}/updateWisataView', ['uses' => 'AdminController@updateWisataView', 'as' => 'admin.updateWisataView']);
Route::post('/admin/insertWisata', ['uses' => 'AdminController@insertWisata', 'as' => 'admin.insertWisata']);

Route::post('/admin/{id}/deleteHotel', ['uses' => 'AdminController@deleteHotel', 'as' => 'admin.deleteHotel']);
Route::post('/admin/{id}/updateHotel', ['uses' => 'AdminController@updateHotel', 'as' => 'admin.updateHotel']);
Route::get('/admin/{id}/updateHotelView', ['uses' => 'AdminController@updateHotelView', 'as' => 'admin.updateHotelView']);
Route::post('/admin/insertHotel', ['uses' => 'AdminController@insertHotel', 'as' => 'admin.insertHotel']);

Route::post('/admin/{id}/deleteTransport', ['uses' => 'AdminController@deleteTransport', 'as' => 'admin.deleteTransport']);
Route::post('/admin/{id}/updateTransport', ['uses' => 'AdminController@updateTransport', 'as' => 'admin.updateTransport']);
Route::get('/admin/{id}/updateTransportView', ['uses' => 'AdminController@updateTransportView', 'as' => 'admin.updateTransportView']);
Route::post('/admin/insertTransport', ['uses' => 'AdminController@insertTransport', 'as' => 'admin.insertTransport']);

Route::get('/admin/showAllData', ['uses' => 'AdminController@showAllData', 'as' => 'admin.showAllData']);

Route::post('/admin/{id}/deleteUser', ['uses' => 'AdminController@deleteUser', 'as' => 'admin.deleteUser']);
Route::post('/admin/{id}/updateUser', ['uses' => 'AdminController@updateUser', 'as' => 'admin.updateUser']);
Route::get('/admin/{id}/updateUserView', ['uses' => 'AdminController@updateUserView', 'as' => 'admin.updateUserView']);


Route::get('/home', ['uses' => 'HomeController@index', 'as' => 'home', 'middleware' => 'isadmin']);
