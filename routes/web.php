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

/*
*
* The '@' indicates what class method to access in a class(HomeController).
*
*/
Route::get('/home', 'ProfileController@index')->name('home');

Route::get('/profile', 'HomeController@index')->name('home');

Route::group(['middleware' => ['web']], function () {
    Route::get('login/{provider}', 'SocialController@redirectToProvider');
    Route::get('login/{provider}/callback', 'SocialController@handleProviderCallback');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
