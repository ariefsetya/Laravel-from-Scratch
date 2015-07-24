<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');


Route::get('home', 'HomeController@index');

// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);

// Route::bind('siswa',function($siswa)
// {
// 	return App\Siswa::find($siswa)->first();
// });

Route::bind('siswa',function ($siswa)
{
	return App\Siswa::find($siswa);
});

Route::resource('siswa','SiswaController');
// Route::get('siswa','SiswaController@index');
// Route::get('siswa/create','SiswaController@create');
// Route::get('siswa/{siswa}','SiswaController@show');
// Route::get('siswa/{siswa}/edit','SiswaController@edit');
// Route::get('siswa/{siswa}/edit',array('as'=>'siswa.update','uses'=>'SiswaController@edit'));