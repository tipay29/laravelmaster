<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/contact-us', function () {
    return 'Contact us Page';
});

Route::get('/about-us', function () {
    return 'About-us Page';
});

Route::get('/posts/{post}', function($post){

    return 'Post #' . $post;

});

Route::group(['namespace' => 'Home'], function(){

    Route::get('/hello', 'HomeController@hello');
    Route::resource('/users', 'UserController');

    Route::get('/insert', 'HomeController@insert');
    Route::get('/edit', 'HomeController@edit');
    Route::get('/read', 'HomeController@read');
    Route::get('/delete', 'HomeController@delete');

});
