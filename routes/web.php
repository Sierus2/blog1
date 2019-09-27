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

Route::get('/fruits','FruitsController@index');
Route::get('/fruits/{fruit}','FruitsController@show');
Route::get('/test','TestController@main');
Route::get('/user','PaginationController@users');
Route::post('/add','AddController@create');
Route::get('/insert', function () {
    return view('insert');
});
Route::get('/student','StudentsController@index');
Route::post('/addstudent','StudentsController@create');



Route::get('/cars','CarsController@form');
Route::post('/carinsert','CarsController@insert');


/*Route::get('fruits', function(){
//    $fructies = DB::table('fruits')->get();

});

Route::get('fruits/{fruit}', function($id){

});*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
