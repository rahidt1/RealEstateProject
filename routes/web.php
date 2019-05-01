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
Route::get('/admin/tableproperty','HomeController@tableproperty')->name('tableproperty');
Route::get('/admin/addproperty','HomeController@addproperty')->name('addproperty');
Route::post('/storeaddproperty','HomeController@storeaddproperty')->name('storeaddproperty');
Route::get('/editaddproperty/{id}','HomeController@editaddproperty')->name('editaddproperty');
Route::post('/updateaddproperty/{id}','HomeController@updateaddproperty')->name('updateaddproperty');
Route::get('/deleteaddproperty/{id}','HomeController@deleteaddproperty')->name('deleteaddproperty');
});

Route::get('/admin/register','HomeController@registeruser')->name('registeruser');
Route::post('storeregisteruser','HomeController@storeregisteruser')->name('storeregisteruser');
Route::get('/admin/login','HomeController@login')->name('login');
Route::post('storelogin','HomeController@storelogin')->name('storelogin');

