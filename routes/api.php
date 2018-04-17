<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/* Giveaway API Routes */
Route::prefix('giveaway')->group(function () {
    Route::post('/referral', 'GiveawayController@referral');
});

/* Galleries API Routes */
Route::prefix('galleries')->group(function () {
    Route::get('/', 'GalleriesApi@all');

    Route::middleware('auth:api')->group(function () {
        Route::post('/create', 'GalleriesApi@create');
        Route::put('/update/{id}', 'GalleriesApi@update');
        Route::delete('/delete/{id}', 'GalleriesApi@destroy');
    });
});

/* Photos API Routes */
Route::prefix('photos')->group(function () {
    Route::get('/', 'PhotosApi@all');

    Route::middleware('auth:api')->group(function () {
        Route::post('/create', 'PhotosApi@create');
        Route::put('/update/{id}', 'PhotosApi@update');
        Route::delete('/delete/{id}', 'PhotosApi@destroy');
    });
});