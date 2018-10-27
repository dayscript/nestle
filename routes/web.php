<?php
use App\User;
use App\Store;
use Illuminate\Support\Facades\Input;

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

//STORE
Route::get('/store/download', 'StoreController@export')->name('store.download');
Route::get('/store/import', 'StoreController@import')->name('store.import');
Route::post('/store/import', 'StoreController@insert')->name('store.insert');

//VISITAS
Route::get('/visitas', function () {
    return view('visitas');
});
Route::post('/visitas', function(){
	$user = Store::where('nit', '=', Input::get('nit'))->first();
	if ($user === null) {
	    return Redirect::to('/')->with('message', 'Usuario no registrado en la base de datos');
	}else{
	return view('form');
	}
});