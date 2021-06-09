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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::group(['prefix' => 'admin', 'middleware' => ['admin', 'auth']], function () {
    //admin
    //santri
    Route::resource('santri', 'SantriController');
    //mapel
    Route::resource('mapel', 'MapelController');
    //nilai pelajaran
    Route::resource('nilai-pelajaran', 'NilaiPelajaranController');
});
