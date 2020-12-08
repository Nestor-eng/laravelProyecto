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
Route::resource('Clientes','App\Http\Controllers\ClientesController')->middleware('auth');
Route::resource('DatosPersonales','App\Http\Controllers\DatosPersonalesController')->middleware('auth');
Route::resource('Galeria','App\Http\Controllers\GaleriaController')->middleware('auth');
Route::resource('Informacion','App\Http\Controllers\InformacionController')->middleware('auth');
Route::resource('Plandealimentacion','App\Http\Controllers\PlandealimentacionController')->middleware('auth');
Route::resource('Medidas','App\Http\Controllers\MedidasController')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
