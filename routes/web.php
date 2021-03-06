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
Route::get("add","ProductAddMoreController@index");
Route::get("addmore","ProductAddMoreController@addMore");
Route::post("addmore","ProductAddMoreController@addMorePost")->name('addmorePost');
Route::get('/edit/addmore/{id}','ProductAddMoreController@addMoreEdit');
Route::post('/edit/addmore/{id}','ProductAddMoreController@addMoreUpdate');
Route::delete('/delete/addmore/{id}','ProductAddMoreController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('disneyplus', 'DisneyplusController@create')->name('disneyplus.create');
Route::post('disneyplus', 'DisneyplusController@store')->name('disneyplus.store');
Route::get('disneyplus/list', 'DisneyplusController@index')->name('disneyplus.index');
Route::get('/downloadPDF/{id}','DisneyplusController@downloadPDF');
Route::resource('fulls', 'FullController');

//Route::resource('cal', 'GoogleCalendarController');
//Route::get('oauth', 'GoogleCalendarController@oauth');