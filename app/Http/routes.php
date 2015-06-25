<?php
/*
 use Route;
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', 'Words\WordsController@index');

Route::get('home', 'HomeController@index');

Route::get('word', 'Words\WordsController@index');

Route::get('wordgame','Words\WordsController@wordgame');

//Route::get('login','WordsUsersController@index');

Route::post('findans','Words\WordsController@findans');

Route::post('findword', [
        'as' => 'findword',
        'uses' => 'Words\WordsController@findword']
);

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
