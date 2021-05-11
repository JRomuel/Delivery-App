<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;





Route::get('/', 'HomeController@index')->name('home');

Route::resource('todos', 'TodoController');
Route::put('todos/{todo}/complete', 'TodoController@complete')->name('todo.complete');

Route::get('/user', 'UserController@index');

Route::post('/upload', 'UserController@uploadAvatar');

Auth::routes();

