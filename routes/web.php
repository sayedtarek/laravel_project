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


Route::get('/', 'SiteController@index');
Route::get('/contact', 'SiteController@contact');
Route::get('/services', 'SiteController@services');
Route::get('/registC', 'RegisterController@indexCertificate');
Route::get('/registK', 'RegisterController@indexKontract');
Route::get('/registM', 'RegisterController@indexMariage');
Route::get('/registT', 'RegisterController@indexTwkel');

//
Route::get('/certificate/{id}/edit', 'RegisterController@edit_certificate');
Route::get('/konract/{id}/edit', 'RegisterController@edit_konract');
Route::get('/mariage/{id}/edit', 'RegisterController@edit_mariage');
Route::get('/twkel/{id}/edit', 'RegisterController@edit_twkel');
//
Route::put('/certificate/{id}', 'RegisterController@update_certificate');
Route::put('/konract/{id}', 'RegisterController@update_konract');
Route::put('/mariage/{id}', 'RegisterController@update_mariage');
Route::put('/twkel/{id}', 'RegisterController@update_twkel');

Route::post('/regist_certificate', 'RegisterController@store_certificate');
Route::post('/regist_kontract', 'RegisterController@store_kontract');
Route::post('/regist_mariage', 'RegisterController@store_mariage');
Route::post('/regist_twkel', 'RegisterController@store_twkel');



Route::get('/register','RegisterationController@create');
Route::post('/register','RegisterationController@store');
Route::get('/login',[ 'as' => 'login', 'uses' => 'SessionsController@create']);
Route::post('/login', 'SessionsController@store');
Route::get('/logout','SessionsController@destroy');



Route::group([

  'prefix' => 'dashboard'
  ], function () {

        Route::get('/', 'DashboardController@index');
        Route::get('/contact', 'ContactController@index');//b3rd feha elmsgat elly gat
        Route::post('/contact', 'ContactController@store');//b3ml save lelmsgat
        Route::get('/complaints', 'ComplaintController@index');
        Route::post('/complaints', 'ComplaintController@store');
        //
        Route::get('/certificates', 'DashboardController@index_certificates');
        Route::get('/konracts', 'DashboardController@index_konracts');
        Route::get('/mariages', 'DashboardController@index_mariages');
        Route::get('/twkels', 'DashboardController@index_twkels');
        //
		Route::get('/certificate/{id}', 'DashboardController@destroy_certificate');
		Route::get('/konract/{id}', 'DashboardController@destroy_konract');
        Route::get('/mariage/{id}', 'DashboardController@destroy_mariage');
        Route::get('/twkel/{id}', 'DashboardController@destroy_twkel');
        //
		Route::get('/contact/{id}', 'DashboardController@destroy_contact');
        Route::get('/complaint/{id}', 'DashboardController@destroy_complaint');

        

        
});




 

// Auth::routes();

