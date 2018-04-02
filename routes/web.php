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
Route::get('/import', 'ExcelController@getImport')->name('import');
Route::post('/import_parse', 'ExcelController@parseImport')->name('import_parse');
Route::post('/import_process', 'ExcelController@processImport')->name('import_process');

