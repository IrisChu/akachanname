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
    return view('landing')->with('type', 'none');
});
Route::get('/girl',function() {
  return view('search')->with('type', 'girl');
});
Route::get('/boy',function() {
  return view('search')->with('type', 'boy');
});
Route::get('/abc',function() {
  return view('list')->with('type', 'abc');
});
Route::get('/girl/{value?}',function() {
  return view('result')->with('type', 'girl');
});
Route::get('/boy/{value?}',function() {
  return view('result')->with('type', 'boy');
});
