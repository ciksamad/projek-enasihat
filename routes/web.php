<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


//Route::get('/temujanji/adminindex', [App\Http\Controllers\AdminController::class, 'index'])->name('temujanji.adminindex');

//Route::get('/temujanji.adminindex','App\Http\Controllers\TemujanjiController@index_1')->name('temujanji.adminindex');

Route::get('/temujanji/create','App\Http\Controllers\TemujanjiController@create')->name('temujanji.create');

Route::post('/temujanji/create','App\Http\Controllers\TemujanjiController@store')->name('temujanji.store');

Route::post('/temujanji/{temujanji}','App\Http\Controllers\TemujanjiController@update')->name('temujanji.update');

Route::get('/temujanji/delete/{temujanji}','App\Http\Controllers\TemujanjiController@delete')->name('temujanji.delete');

Route::post('/temujanji/delete/{temujanji}','App\Http\Controllers\TemujanjiController@destroy')->name('temujanji.destroy');

Route::get('/temujanji/{temujanji}','App\Http\Controllers\TemujanjiController@show')->name('temujanji.show');

Route::get('/temujanji','App\Http\Controllers\TemujanjiController@index')->name('temujanji.index');

Route::get('/temujanji/adminindex','App\Http\Controllers\AdminController@index')->name('temujanji.adminindex');

Auth::routes();

Route::get('/admin/login','App\Http\Controllers\Auth\AdminLoginController@showLoginForm')->name('admin.login');

Route::post('/admin/login','App\Http\Controllers\Auth\AdminLoginController@login')->name('admin.login.submit');

