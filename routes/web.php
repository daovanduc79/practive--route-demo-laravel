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
    return '<h2>This is Home page</h2>';
});
Route::get('/about', function () {
    return '<h2>This is About page</h2>';
});
Route::get('/contact', function () {
    return '<h2>This is Contact page</h2>';
});
Route::get('/user', function () {
    return view('user', ['name'=>'Robinson']);
});
Route::get('/user-name/{name?}', function ($name = 'Juliet') {
    echo '<h2>Welcome '.$name .' !!</h2>';
});
Route::get('/home', 'HomeController@index');
