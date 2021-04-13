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

Route::get( '/', function () {
    return view('home');
});

Route::get('/login','App\Http\Controllers\AuthController@login')->name('login');
Route::post('/postlogin','App\Http\Controllers\AuthController@postlogin');

Route::get('/logout','App\Http\Controllers\AuthController@logout');


Route::group(['middleware' => ['auth','checkRole:admin']], function ()
{
	Route::get('/dashboard','App\Http\Controllers\DashboardController@index');
	Route::post('/dashboard/tambah','App\Http\Controllers\DashboardController@tambah');
	Route::post('/dashboard/addpasien','App\Http\Controllers\DashboardController@addpasien');
	Route::post('/dashboard/addrm','App\Http\Controllers\TransaksiController@addrm');

	Route::get('/transaksi','App\Http\Controllers\TransaksiController@index');

	
	
	Route::post('/poliklinik/adddokter','App\Http\Controllers\PoliklinikController@adddokter');

	Route::get('/pasien','App\Http\Controllers\PasienController@index');
	Route::post('/pasien/create','App\Http\Controllers\PasienController@create');
	Route::get('/pasien/{id}/edit','App\Http\Controllers\PasienController@edit');
	Route::post('/pasien/{id}/update','App\Http\Controllers\PasienController@update');
	Route::get('/pasien/{id}/delete','App\Http\Controllers\PasienController@delete');
	Route::get('/pasien/{id}/detail','App\Http\Controllers\PasienController@detail');

	Route::get('/dokter','App\Http\Controllers\DokterController@index');
	
	Route::get('/user','App\Http\Controllers\UserController@index');



});

Route::group(['middleware' => ['auth','checkRole:dokter,admin']], function ()
{
	Route::get('/poliklinik','App\Http\Controllers\PoliklinikController@index');

	Route::get('/poliklinik/{id}/detail','App\Http\Controllers\PoliklinikController@detail');

	
});	