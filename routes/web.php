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

Route::get('/tm', 'StoreController@test')->name('connect.test');
Route::get('/nmap', 'StoreController@nMap')->name('connect.nMap');

Route::group(array('prefix' => 'api/v1'), function()
{
    Route::resource('ttt',  'TestApiController');
});
