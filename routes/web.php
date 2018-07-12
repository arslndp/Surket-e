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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//admin
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'admin\adminController@index')->middleware('auth');
Route::get('/admin/liatsurat/ktp/{data}', 'admin\persetujuan@liatsurat')->middleware('auth');
Route::get('/admin/setujui/{data}','admin\persetujuan@setujui')->middleware('auth');
Route::get('/admin/tidaksetujui/{data}','admin\persetujuan@tidakSetuju')->middleware('auth');
Route::get('/admin/info/list','admin\info@list')->middleware('auth');
Route::get('/admin/info/buat','admin\info@createPage')->middleware('auth');
Route::post('/admin/info/create', 'admin\info@create')->middleware('auth');
Route::get('/admin/info/hapus/{data}','admin\info@destroy')->middleware('auth');
Route::get('/admin/info/edit/{data}','admin\info@editPage')->middleware('auth');
Route::post('/admin/info/edit','admin\info@edit')->middleware('auth');
Route::get('/admin/info/view/{data}','admin\info@view')->middleware('auth');
Route::get('/admin/logout','admin\adminController@logout')->middleware('auth');


/// khusus public KTP
Route::post('/logktp','rakyat\publicController@logKtp')->name('log');
Route::get('/suket/ktp', 'page\suket@formKtp');
Route::get('/suket/waitinglist','page\suket@waitinglist');
Route::get('/suket/accept','page\suket@diSetujui');
Route::get('/logOutKtp', 'rakyat\publicController@logOutKtp')->name('out');
Route::get('/info/list', 'page\info@list');
Route::get('/info/view/{data}','page\info@view');
Route::post('/prossesktp','page\suket@ktp');
Route::get('/persetujuan','admin\persetujuan@list');
Route::get('/suket/tiket/{data}', 'page\suket@getTiket');
