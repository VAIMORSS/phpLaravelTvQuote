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

// Route::get('/', function () {
//     return view('home');
// });


Route::get('/','QuotesController@home');


Route::get('/create', function () {
        return view('create');
});

Route::post('/create','QuotesController@create');

Route::get('/TableView','QuotesController@tableView');


Route::get('/update/{id}','QuotesController@update');

Route::get('/remove/{id}','QuotesController@remove');

Route::post('/Update/{id}','QuotesController@finalUpdate');




