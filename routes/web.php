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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Clientes', function () {
    return view('Clientes.index');
});
Route::resource('Clientes','App\Http\Controllers\ClientesController');
Route::resource('DatosPersonales','App\Http\Controllers\DatosPersonalesController');
Route::resource('Galeria','App\Http\Controllers\GaleriaController');
Route::resource('Informacion','App\Http\Controllers\InformacionController');
Route::resource('Plandealimentacion','App\Http\Controllers\PlandealimentacionController');
Route::resource('Medidas','App\Http\Controllers\MedidasController');

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
