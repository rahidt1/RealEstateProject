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
/*Newsletter*/
Route::post('/','HomeController@subscribe')->name('subscribe');

Route::get('/about','HomeController@about')->name('about');
Route::get('/properties','HomeController@properties')->name('properties');
Route::get('/singleproperty/{id}','HomeController@singleproperty')->name('singleproperty');
Route::get('/news','HomeController@news')->name('news');
Route::get('/contact','HomeController@contact')->name('contact');
Route::get('/complain','HomeController@complain')->name('complain');

Route::group(['middleware' => 'checkloggedin'],function(){
Route::get('/admin/{id}','HomeController@admin')->name('admin');

/*Property Section*/

Route::get('/addproperty','HomeController@addproperty')->name('addproperty');
Route::get('/tableproperty/{id}','HomeController@tableproperty')->name('tableproperty');
Route::post('/storeaddproperty','HomeController@storeaddproperty')->name('storeaddproperty');
Route::get('/editaddproperty/{id}','HomeController@editaddproperty')->name('editaddproperty');
Route::post('/updateaddproperty/{id}','HomeController@updateaddproperty')->name('updateaddproperty');
Route::get('/deleteaddproperty/{id}','HomeController@deleteaddproperty')->name('deleteaddproperty');

Route::get('/propertydetail/{id}','HomeController@propertydetail')->name('propertydetail');

/*User Section*/

Route::get('/tableuser/{id}','HomeController@tableuser')->name('tableuser');
Route::get('/edituser/{id}','HomeController@edituser')->name('edituser');
Route::post('/updateuser/{id}','HomeController@updateuser')->name('updateuser');
Route::get('/deleteuser/{id}','HomeController@deleteuser')->name('deleteuser');

/*Logout*/
Route::get('/logout','HomeController@logout')->name('logout');

/*Profile*/
Route::get('/profile/{id}','HomeController@profile')->name('profile');
Route::get('/editprofile/{id}','HomeController@editprofile')->name('editprofile');
Route::post('/updateprofile/{id}','HomeController@updateprofile')->name('updateprofile');
});

/*Search*/
Route::get('search','HomeController@search')->name('search');

/*Register*/

Route::get('/register','HomeController@registeruser')->name('registeruser');
Route::post('storeregisteruser','HomeController@storeregisteruser')->name('storeregisteruser');


/*Login Section*/

Route::get('/login','HomeController@login')->name('login');
Route::post('storelogin','HomeController@storelogin')->name('storelogin');

/*Logout*/

Route::get('logout', 'HomeController@logout')->name('logout');

/*Single Image*/

Route::get('/admin/imageform','HomeController@imageform')->name('imageform');
Route::post('/upload','HomeController@upload')->name('upload');
Route::get('/admin/tableimage','HomeController@tableimage')->name('tableimage');

/*Multiple Image*/

Route::get('/admin/imagemultiple','HomeController@imagemultiple')->name('imagemultiple');
Route::post('/uploadmultiple','HomeController@uploadmultiple')->name('uploadmultiple');
Route::get('/admin/tableimagemultiple/{id}','HomeController@tableimagemultiple')->name('tableimagemultiple');

/*PDF*/
Route::get('admin/pdfpage','HomeController@pdfpage')->name('pdfpage');
Route::get('admin/pdf','HomeController@pdf')->name('pdf');

/*Foreign Key*/
Route::get('/foreignkey','HomeController@foreignkey')->name('foreignkey');

/*Ajax*/
Route::get('/division','ApiController@division')->name('division');
Route::get('/district/{division_id}','ApiController@district')->name('district');

Route::get('/ajaxform','ApiController@ajaxform')->name('ajaxform');
//Route::post('/ajaxadd','ApiController@ajaxadd')->name('ajaxadd');





Route::get('/sendemail', 'SendEmailController@index');
Route::post('/sendemail/send', 'SendEmailController@send');


