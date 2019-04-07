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

Route::get('/','HomeController@home');
Route::get('/about','HomeController@about');
Route::get('/properties','HomeController@properties');
Route::get('/news','HomeController@news');
Route::get('/contact','HomeController@contact');

Route::group(['middleware' => 'checkloggedin'],function(){
Route::get('/admin','HomeController@admin');
Route::get('/admin/table','HomeController@table');
Route::get('/admin/register','HomeController@register');
});


Route::get('/admin/login','HomeController@login');
Route::post('storelogin','HomeController@storelogin');

