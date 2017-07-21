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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cart', function () {
    return view('cart/test');
});

Route::get('/wel', function () {
    return view('welcome_mat');
});

Route::get('/home2', function()
{
    return View::make('pages.home');
});
Route::get('what', function()
{
    return View::make('pages.what');
});
Route::get('where', function()
{
    return View::make('pages.where');
});
Route::get('why', function()
{
    return View::make('pages.why');
});
Route::get('who', function()
{
    return View::make('pages.who');
});
Route::get('how', function()
{
    return View::make('pages.how');
});
