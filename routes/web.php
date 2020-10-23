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

Route::get('/', 'HomeController@home')->name('home');
Route::get('/home', 'HomeController@home');

Route::get('/these/{thesis}/{code}', 'ThesisController@show')->name('thesis');

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/login', 'AuthController@submit')->name('auth.submit');
Route::get('/user/create/{name}', 'AuthController@create')->name('auth.create');
Route::post('/user/create', 'AuthController@store')->name('auth.store');
Route::get('/logout', 'AuthController@logout')->name('logout');
Route::post('/authenticate', 'AuthController@authenticate')->name('auth.authenticate');

Route::get('/print', 'PrintController@print')->name('print');

Route::get('/dev', function(){
    foreach (\App\Thesis::all() as $thesis) {
        echo '<a href="'.route('thesis', ['thesis' => $thesis->id, 'code' => $thesis->code]).'">'
            .route('thesis', ['thesis' => $thesis->id, 'code' => $thesis->code]).'</a><br />';
    }
});
