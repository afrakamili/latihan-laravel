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
// view -> menampilkan php dari folder views pada file welcome
/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/test/{angka}', function ($angka) {
    return view('test', ["angka" => $angka]);
});

Route::get('/halo/{nama}', function($nama){
    return "halo $nama";
});

Route::get('/form', 'RegisterController@form');

Route::get('/sapa', 'RegisterController@sapa');

Route::post('/sapa', 'RegisterController@sapa_post');*/

/*Route::get('/', 'HomeController@home');

Route::get('/register', 'AuthController@register');

Route::post('/welcome', 'AuthController@welcome');

Route::get('/master', function(){
    return view('adminlte.master');
});*/

Route::get('/', function (){
    return view ('items.index');
});

Route::get('/data-tables', function(){
    return view('items.create');
});


