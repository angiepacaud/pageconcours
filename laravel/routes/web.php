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


//Route::get('/', 'WelcomeController@index');


// Route::get('texte', 'TexteController@getForm');
// Route::post('texte', 'TexteController@postForm');

Route::get('/', 'ManuscritsController@index');
Route::post('/', ['uses' => 'ManuscritsController@postForm', 'as' => 'storeManuscrits']);

// Route::get('manuscrits', 'ManuscritsController@getForm');
// Route::post('manuscrits', ['uses' => 'ManuscritsController@postForm', 'as' => 'storeManuscrits']);

 Route::get('erreur_extension', function () {
 	return view('erreur_extension');
 });
 
 // Route::get('erreur_taille', function () {
 // 	return view('erreur_taille');
 // });
 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/edit', 'HomeController@edit')->name('edit');

//Route::get('/edit/{manuscrits}', 'HomeController@edit');
Route::get('/edit/{manuscrits}', 'HomeController@edit', function(App\Manuscrits $manuscrits){});
Route::post('/edit/{manuscrits}', ['uses' => 'HomeController@edit', 'as' => 'storeEdit']);

//Route::post('/edit/{manuscrits}', ['uses' => 'HomeController@postForm', 'as' => 'storeStatut']);
//Route::ressource('user','UserController');


