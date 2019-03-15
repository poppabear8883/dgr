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

Route::prefix('contact')->group(function () {
    Route::post('/', 'ContactUsController@contact');
});

Route::prefix('join')->group(function () {
    Route::post('/apply', 'ApplyController@apply');
});

/* Giveaway API Routes */
Route::prefix('giveaway')->group(function () {
    Route::post('/referral', 'GiveawayController@referral');
});

/* Galleries API Routes */
Route::prefix('galleries')->group(function () {
    Route::get('/', 'GalleriesApi@all');
    Route::get('/{id}', 'GalleriesApi@photos');
    Route::get('/paginate/{perpage}', 'GalleriesApi@paginate');

    Route::middleware('auth')->group(function () {
        Route::post('/create', 'GalleriesApi@create');
        Route::put('/update/{id}', 'GalleriesApi@update');
        Route::delete('/{id}', 'GalleriesApi@destroy');
    });
});

/* Photos API Routes */
Route::prefix('photos')->group(function () {
    Route::get('/', 'PhotosApi@all');

    Route::middleware('auth')->group(function () {
        Route::post('/create', 'PhotosApi@create');
        Route::put('/update/{id}', 'PhotosApi@update');
        Route::delete('/{id}', 'PhotosApi@destroy');
    });
});