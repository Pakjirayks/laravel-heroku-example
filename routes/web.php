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
Route::get('users', function() {
    return '<h1>User! 555</h1>';
});
Route::get('showname', function () {
    return '<h1>hello Laravel</h1>';
});
  Route::get('welcom/name','Hellocontroller@showhello');
