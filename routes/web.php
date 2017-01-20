<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController');
Route::get('posts/{category}', 'PostController@index');
Route::get('post/{slug}', 'PostController@show');
Route::get('products', 'ProductController');

Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('admin/login', function() {
    return redirect('login');
})->name('voyager.login');