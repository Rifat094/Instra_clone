<?php

use Illuminate\Support\Facades\Route;
use \App\Mail\NewUserOfInstraClone;

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




Auth::routes();
//Route::post('follow/{user}',function (){
   // return ['success'];
//});
//new comment
//Route::get('/email',function (){
  // return new NewUserOfInstraClone();
//});
Route::post('/follow/{user}','FollowsController@store');

Route::get('/','PostsController@index');
Route::get('/p/create' , 'PostsController@create');
Route::post('/p' , 'PostsController@store');
Route::get('/p/{post}' , 'PostsController@show');

Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.show');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('update.show');
