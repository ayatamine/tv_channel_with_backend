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

/* Route::get('/', function () {
    return view('welcome');
}); */
/* Route::get('/', function () {
    return view('welcome');
}); */


Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/live', 'HomeController@live')->name('live');
Route::get('/programs', 'HomeController@programs')->name('programs');
Route::get('/programs/loadmore', 'HomeController@loadMorePrograms')->name('programs.loadmore');
Route::post('/sendContactMessage', 'AdminSingleController@sendContactMessage')->name('message.contact');
//Route::get('/profile', 'HomeController@profile')->name('user.profile');
