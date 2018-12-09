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

//HOME
Route::get('/home', 'HomeController@index');
Route::post('/home', 'HomeController@postHome');

//VISITAS
Route::get('/visitas', 'VisitasController@index')->name('visitas');
Route::post('/visitas', 'VisitasController@postVisitas');
Route::get('/visitas/{id}','VisitasController@show');
Route::get('/visitas/{id}/edit','VisitasController@edit');

//CONSULTAR
Route::get('/consultar', 'ConsultarController@index');
Route::post('/consultar', 'ConsultarController@postConsultar');

//STORE
Route::get('/store/download', 'StoreController@export')->name('store.download');
Route::get('/store/import', 'StoreController@import')->name('store.import');
Route::post('/store/import', 'StoreController@insert')->name('store.insert');

Route::resource('consultar','ConsultarController');
//Route::resource('visitas','VisitasController');

/*Route::get('/visitas', function () {
    return view('visitas');
});
Route::post('/visitas', function(){
//	$visita = Store::where('n_visita', '=', Input::get('visita'))->first();	
//	if ($visita === null) {
		# code...
//	}
	$nit = Store::where('nit', '=', Input::get('nit'))->first();
	//dd($nit);
	$visita = Store::where('n_visita', '=', Input::get('visita'))->first();
	if ($nit === null || $visita === null ) {
	    return Redirect::to('/visitas')->with('message', 'Usuario no registrado en la base de datos');
	}else{
		Session::put('nit-id', $nit->id);
		return view('form')->with('nit', $nit);
	//return view('form');
	}
});
*/