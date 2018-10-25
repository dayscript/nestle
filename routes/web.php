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
	return redirect('/admin');
    //return view('vendor.voyager.login');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/store/download', 'StoreController@export')->name('store.download');
Route::get('/store/import', 'StoreController@import')->name('store.import');
Route::post('/store/import', 'StoreController@insert')->name('store.insert');