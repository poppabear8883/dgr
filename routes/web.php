<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function() {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/galleries', function () {
    return view('galleries');
});

Route::get('/testimonies', function() {
    return view('testimonies');
});

Route::get('/giveaways', function () {
    return view('giveaways');
});

Route::get('/contact', function() {
    return view('contact');
});


Route::get('/refer-a-friend', function() {
    return view('refer');
});

Auth::routes();

Route::middleware('auth')->group(function() {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    Route::prefix('admin')->group(function() {
        Route::resource('contacts', 'ContactsController');
        Route::get('contacts/import/csv', 'ContactsController@importCsv');
        Route::resource('galleries', 'GalleriesController');
    });
});