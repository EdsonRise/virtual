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


Route::get('/Dashboard', function () {

	 return view('Dashboard');
});

Route::get('/', function () {

	 return view('home');
});



Auth::routes();

Route::get('/home', 'HomeeController@index')->name('home');



Route::get('/Registo_admin', function()
{
	return View::make('Regadmin');



});


Route::get('/admin','adminController@list')->name('listad');;
Route::get('/lojas','lojaController@list');
Route::get('/Lojas_Online','lojaController@listOnline');

Route::get('/Registo_loja','lojaController@dropdown');
Route::get('/publicar_loja','lojaController@loja_bairro');



Route::get('/Users', function()
{
	return View::make('Users');
});



Route::get('/charts', function()
{
	return View::make('mcharts');
});

Route::get('/tables', function()
{
	return View::make('table');
});

Route::get('/forms', function()
{
	return View::make('form');
});

Route::get('/grid', function()
{
	return View::make('grid');
});

Route::get('/buttons', function()
{
	return View::make('buttons');
});


Route::get('/icons', function()
{
	return View::make('icons');
});

Route::get('/panels', function()
{
	return View::make('panel');
});

Route::get('/typography', function()
{
	return View::make('typography');
});

Route::get('/notifications', function()
{
	return View::make('notifications');
});

Route::get('/blank', function()
{
	return View::make('blank');
});	

Route::get('/login', function()
{
	return View::make('login');
});
Route::get('/lojaLogin', function()
{
	return View::make('login_org');
});


Route::get('/documentation', function()
{
	return View::make('documentation');
});
Route::resource('crud', 'crud');

Route::get('/Loja_admin	', function()
{
	return View::make('Loja_admin');
});
Route::get('/RegProduto	', function()
{
	return View::make('RegProduto');
});

Route::post('/insertLoja','lojaController@insert');

Route::post('/insertt','adminController@insert');
Route::post('/insert','lojaController@insertOnline');

Auth::routes();

