<?php
Route::get('/',"WebController@index");
Route::get('/home','HomeController@index')->name('home');

Route::get("/demo-routing","WebController@demoRouting");
Route::get("/category/{category:slug}","HomeControllerA@category");
