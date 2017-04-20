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

// Route::get('/', function () {
//
//     // SELECT * FROM portfolio WHERE id=1;
//     $portfolio = DB::table('portfolio')->where('id', 1)->get();
//     dd($portfolio);
//     // SELECT * FROM portfolio;
//     $portfolio = DB::table('portfolio')->get();
//     dd($portfolio);
// });

Route::get('contact', 'ContactController@getForm');
Route::post('contact', 'ContactController@postForm');
