<?php
use Modules\Category\Providers\CategoryServiceProvider;
use Modules\Category\Http\Controllers\Category;

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

Route::prefix('category')->group(function() {
    
    Route::get('/view', 'CategoryController@index')->name('view.category');
    Route::get('/create', 'CategoryController@create')->name('create.category');
    Route::post('/store', 'CategoryController@store')->name('store.category');
    Route::get('/edit/{id}', 'CategoryController@edit')->name('edit.category');
    Route::get('/show/{id}', 'CategoryController@show')->name('show.category');
    Route::post('/update/{id}', 'CategoryController@update')->name('update.category');
    Route::get('/destroy/{id}', 'CategoryController@destroy')->name('destroy.category');
});
