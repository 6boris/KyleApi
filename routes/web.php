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


Route::get('/home', 'Home\PhotosController@index');
Route::get('/api/demo', 'Api\SmController@demo');

Route::group(['prefix' => 'api','namespace' => 'Api','middleware' => 'Api'],function(){
	Route::group(['prefix' => 'sm'],function(){
        Route::post('sm4_decrypt','SmController@sm4_decrypt');
        Route::post('sm4_encrypt','SmController@sm4_encrypt');
	});
});


// Route::get('/api/sm/sm4_decrypt', 'Api\SmController@sm4_decrypt');