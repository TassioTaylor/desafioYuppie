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

Route::get('alunos', 'AlunosController@index');
Route::get('alunos/form-create', 'AlunosController@formcreate');
Route::post('alunos/create', 'AlunosController@create');
Route::get('alunos/form-edit/{id}', 'AlunosController@formEdit');
Route::post('alunos/edit/{id}', 'AlunosController@edit');
Route::get('alunos/delete/{id}', 'AlunosController@delete');


Route::post('import-file', 'ExcelController@importFile')->name('import.file');
Route::get('import-export-view', 'ExcelController@importExportView')->name('import.export.view');


Route::get('produtos','ProdutosController@index');