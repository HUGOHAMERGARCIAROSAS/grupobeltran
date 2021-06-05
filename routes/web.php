<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\JhonatanPermission\Models\Role;
use App\JhonatanPermission\Models\Permission;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'Auth\LoginController@showLoginForm')->name('/');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


// CLIENTES

Route::resource('/clientes', 'Admin\ClienteController')->names('clientes');
Route::put('clientes/delete/{id}', 'Admin\ClienteController@update1')->name('clientes.update1');
Route::post('import-list-excel', 'Admin\ClienteController@importExcel')->name('clientes.import.excel');
Route::get('export-list-excel', 'Admin\ClienteController@exportExcel')->name('clientes.export.excel');
Route::get('export-list-pdf', 'Admin\ClienteController@exportPdf')->name('clientes.export.pdf');

//RUTAS

Route::resource('rutas', 'Admin\RutasController');
Route::put('rutas/delete/{id}', 'Admin\RutasController@update1')->name('rutas.update1');
Route::post('iimport-list-excel', 'Admin\RutasController@importExcel')->name('rutas.import.excel');
Route::get('eexport-list-excel', 'Admin\RutasController@exportExcel')->name('rutas.export.excel');
Route::get('eexport-list-pdf', 'Admin\RutasController@exportPdf')->name('rutas.export.pdf');

//TARIFAS

Route::resource('tarifas', 'Admin\TarifasController');
Route::put('tarifas/delete/{id}', 'Admin\TarifasController@update1')->name('tarifas.update1');
Route::post('timport-list-excel', 'Admin\TarifasController@importExcel')->name('tarifas.import.excel');
Route::get('texport-list-excel', 'Admin\TarifasController@exportExcel')->name('tarifas.export.excel');
Route::get('texport-list-pdf', 'Admin\TarifasController@exportPdf')->name('tarifas.export.pdf');

//ROLES

Route::resource('/roles', 'Admin\RoleController')->names('roles');


//USUARIO
Route::resource('/users', 'Admin\UserController')->names('users');
Route::put('users/delete/{id}', 'Admin\UserController@update1')->name('users.update1');

//DOCUMENTOS DE PERSONAL

Route::resource('/documentosP', 'Admin\DocumentoPController')->names('documentosP');
Route::put('documentosP/delete/{id}', 'Admin\DocumentoPController@update1')->name('documentosP.update1');

//DOCUMENTOS DE VEHÍCULO
Route::resource('/documentosV', 'Admin\DocumentoVController')->names('documentosV');
Route::put('documentosV/delete/{id}', 'Admin\DocumentoVController@update1')->name('documentosV.update1');


//UNIDADES

Route::resource('/unidades', 'Admin\UnidadController')->names('unidades');
Route::put('/unidades/delete/{id}', 'Admin\UnidadController@update1')->name('unidad.update1');
Route::post('uimport-list-excel', 'Admin\UnidadController@importExcel')->name('unidades.import.excel');
Route::get('uexport-list-excel', 'Admin\UnidadController@exportExcel')->name('unidades.export.excel');
Route::get('uexport-list-pdf', 'Admin\UnidadController@exportPdf')->name('unidades.export.pdf');

//PROVEEDORES

Route::resource('/proveedores', 'Admin\ProveedorController')->names('proveedores');
Route::put('/proveedores/delete/{id}', 'Admin\ProveedorController@update1')->name('proveedores.update1');
Route::post('primport-list-excel', 'Admin\ProveedorController@importExcel')->name('proveedores.import.excel');
Route::get('prexport-list-excel', 'Admin\ProveedorController@exportExcel')->name('proveedores.export.excel');
Route::get('prexport-list-pdf', 'Admin\ProveedorController@exportPdf')->name('proveedores.export.pdf');


//ORDENES DE TRABAJO
Route::resource('/ordenTrabajo','OrdenTrabajoController')->names('viajes');

//CAJA
Route::resource('/caja','CajaController')->names('Caja');

//ABASTECIMIENTO DE COMBUSTIBLE
Route::resource('combustible','CombustibleController')->names('abastecimientoCombustible');