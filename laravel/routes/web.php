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


Route::get('/', 'ManuscritsController@index');
Route::post('/', ['uses' => 'ManuscritsController@postForm', 'as' => 'storeManuscrits']);
//Route::post('/', ['uses' => 'ManuscritsController@index', 'as' => 'storeManuscrits']);

 Route::get('erreur_extension', function () {
 	return view('erreur_extension');
 });
 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/edit/{manuscrits}', 'HomeController@edit', function(App\Manuscrits $manuscrits){});
Route::post('/edit/{manuscrits}', ['uses' => 'HomeController@edit', 'as' => 'storeEdit']);

Route::get('/download/{manuscrits}', 'HomeController@download');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

