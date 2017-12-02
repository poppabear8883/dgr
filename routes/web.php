<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function() {
    return view('about');
});

Auth::routes();

Route::middleware('auth')->group(function() {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    Route::prefix('admin')->group(function() {
        Route::resource('contacts', 'ContactsController');
    });
});