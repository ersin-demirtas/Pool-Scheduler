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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/job/create', 'JobsController@create');
Route::get('/service/cost/{id}','ServiceController@getServiceCost');
Route::get('/service/cost/','ServiceController@getServiceCost2');

Route::get('/getCloth','ClothsController@getTypes');
Route::get('/getColor','ClothsController@getColors');
