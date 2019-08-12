<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
  
Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Route::get('/home', 'AdminController@index')->name('adminhome');
    Route::get('/login', 'Auth\AdminLogin@index')->name('adminlogin.show');
    Route::post('/login', 'Auth\AdminLogin@login')->name('adminlogin.submit');
    Route::get('/logout', 'Auth\AdminLogin@logout')->name('adminlogout');

});
