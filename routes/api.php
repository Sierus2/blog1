<?php

use Illuminate\Http\Request;

/*
 *
 * Route::get('test','TestapiController@getAll')->name('getAllTest');
Route::post('test','TestapiController@add')->name('addTest');
Route::get('test/{id}','TestapiController@get')->name('getTest');
Route::post('test/{id}','TestapiController@edit')->name('editTest');
Route::get('test/delete/{id}','TestapiController@delete')->name('deleteTest');
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('animals','AnimalController@getAll')->name('getAll');
Route::post('animals','AnimalController@add')->name('add');
Route::get('animal/{id}','AnimalController@get')->name('get');
Route::get('animal/delete/{id}','AnimalController@delete')->name('delete');
Route::post('animals/{id}','AnimalController@edit')->name('edit');


