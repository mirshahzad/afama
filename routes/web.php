<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/', 'PagesController@index');
Route::get('/complaint', 'PagesController@create');
Route::post('/complaints', 'PagesController@store');
// Route::resource('report', 'ReportController');

Route::get('report', ['as' => 'report.index', 'uses' => 'ReportController@index']);
Route::get('report/{id}/edit', ['as' => 'report.edit', 'uses' => 'ReportController@edit']);
Route::patch('report/{id}', ['as' => 'report.update', 'uses' => 'ReportController@update']);
Route::delete('report/{id}', ['as' => 'report.destroy', 'uses' => 'ReportController@destroy']);


Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/login', function () {
    return view('pages/loginpage');
});