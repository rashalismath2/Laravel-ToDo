<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
  
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/admin/login', 'Auth\AdminLogin@index')->name('adminlogin.show');
Route::post('/admin/login', 'Auth\AdminLogin@login')->name('adminlogin.submit');
Route::get('/admin/logout', 'Auth\AdminLogin@logout')->name('adminlogout');
