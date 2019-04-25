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

Route::get('/','HomeController@home')->name('home');
Route::get('/about','HomeController@about')->name('about');
Route::get('/properties','HomeController@properties')->name('properties');
Route::get('/news','HomeController@news')->name('news');
Route::get('/contact','HomeController@contact')->name('contact');

Route::group(['middleware' => 'checkloggedin'],function(){
Route::get('/admin','HomeController@admin')->name('admin');
Route::get('/admin/table','HomeController@table')->name('table');
Route::get('/admin/register','HomeController@register')->name('register');
Route::post('/storeregister','HomeController@storeregister')->name('storeregister');
Route::get('/editregister/{id}','HomeController@editregister')->name('editregister');
Route::post('/updateregister/{id}','HomeController@updateregister')->name('updateregister');
Route::get('/deleteregister/{id}','HomeController@deleteregister')->name('deleteregister');
});


Route::get('/admin/login','HomeController@login')->name('login');
Route::post('storelogin','HomeController@storelogin')->name('storelogin');

