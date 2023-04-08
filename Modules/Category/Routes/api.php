<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::prefix('category')->group(function() {
    Route::get('/view', 'CategoryController@index')->name('view.category');
    Route::get('/create', 'CategoryController@create')->name('create.category');
    Route::get('/store', 'CategoryController@store')->name('store.category');
    Route::get('/show', 'CategoryController@show')->name('show.category');
    Route::get('/update', 'CategoryController@update')->name('update.category');
    Route::get('/destroy', 'CategoryController@destroy')->name('destroy.category');
});

Route::middleware('auth:api')->get('/category', function (Request $request) {
    return $request->user();
});