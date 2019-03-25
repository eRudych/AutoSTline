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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'PageController@main');
Route::get('/post/list', 'PostController@showpost');
Auth::routes();



Route::get('/post/add', function(){
    return view('post.add');
});
Route::get('/post/{id}',  'PostController@showPostById')->name('showPost');
Route::get('/post/remove/{id}', 'PostController@remove');
Route::post('/post/add', 'PostController@create');
Route::get('/post/edit/{id}', 'PostController@edit');
Route::post('/post/update', 'PostController@update');

Route::get('/ua/post/add', function(){
    return view('ua.post.add');
});
Route::get('/ua/post/{id}',  'PostUaController@showPostById')->name('showPost');
Route::get('/ua/post/remove/{id}', 'PostUaController@remove');
Route::post('/ua/post/add', 'PostUaController@create');
Route::get('/ua/post/edit/{id}', 'PostUaController@edit');
Route::post('/ua/post/update', 'PostUaController@update');

Route::get('/en/post/add', function(){
    return view('en.post.add');
});
Route::get('/en/post/{id}',  'PostEnController@showPostById')->name('showPost');
Route::get('/en/post/remove/{id}', 'PostEnController@remove');
Route::post('/en/post/add', 'PostEnController@create');
Route::get('/en/post/edit/{id}', 'PostEnController@edit');
Route::post('/en/post/update', 'PostEnController@update');


Route::get('/products', 'PageController@products');
Route::get('/about', 'PageController@about');

Route::get('/ru', 'PageController@main');

Route::get('/ua', 'PageUaController@main');
Route::get('/ua/products', 'PageUaController@products');
Route::get('/ua/about', 'PageUaController@about');


Route::get('/en', 'PageEnController@main');
Route::get('/en/products', 'PageEnController@products');
Route::get('/en/about', 'PageEnController@about');


Route::get('/XXXXXX', 'PageController@secret');

Route::get('/news', 'PostController@showpost');

Route::get('/ua/news', 'PostUaController@showpost');

Route::get('/en/news', 'PostEnController@showpost');

Route::post('/', 'MessagesController@send');
Route::get('/MFLQv3ZT', 'MessagesController@show');
Route::get('/MFLQv3ZT/{id}', 'MessagesController@remove');








