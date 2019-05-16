<?php
//namespace App\Http\Controllers\Admin;
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
    //return 'Hello World!!';
});

Route::get('/articles','ArticleController@index');

Route::get('/article/{article}', 'ArticleController@show');

//Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/admin/article', 'Admin\ArticleController@index');
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    //prefix all route with admin
    //middleWare required log-in
    /*Route::get('article', 'Admin\ArticleController@index');
    Route::post('article', 'Admin\ArticleController@store');

    Route::get('article/create', 'Admin\ArticleController@create');
    Route::delete('article/{article}', 'Admin\ArticleController@delete')->name('admin.article.delete');*/
    Route::prefix('article')->name('article.')->group(function () {
        Route::get('/', 'Admin\ArticleController@index')->name('index');
        Route::post('/', 'Admin\ArticleController@store')->name('store');

        Route::get('create', 'Admin\ArticleController@create');
        Route::delete('{article}', 'Admin\ArticleController@delete')->name('delete');
        Route::get('{article}/edit', 'Admin\ArticleController@edit');
        Route::put('{article}', 'Admin\ArticleController@update');
        //nick name for this route
        //Route::post('/', 'Admin\ArticleController@update');
    });
});
