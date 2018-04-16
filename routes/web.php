<?php

Route::get('img/{path}', 'ImageController@show')->where('path', '.*');

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

Route::get('/giveaways', 'GiveawayController@show');

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/join-our-team', function() {
    return view('join');
});

Route::get('/nrlb', function() {
    return view('nrlb');
});


//Route::get('/galleries/{id}/photos', 'GalleriesController@photos');

Auth::routes();

Route::middleware('auth')->group(function() {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    Route::prefix('admin')->group(function() {
        Route::resource('contacts', 'ContactsController');
        Route::get('contacts/import/csv', 'ContactsController@importCsv');
        Route::resource('galleries', 'GalleriesController');
        Route::resource('photos', 'PhotosController');
    });
});