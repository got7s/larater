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

/*Route::get('/', 'PagesController@home');
*/				/*en vez la funcion anonima llamo  a la clase PagesController*/

					/* function () {return view('about');
}*/

Route::get('/about',function () {return view('about');});

Route::get('/','PagesController@welcome');

Route::get('/message/{message}','MessageController@show');

Route::post('/message/create','MessageController@create');