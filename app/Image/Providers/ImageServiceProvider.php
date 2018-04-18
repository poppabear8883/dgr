<?php

namespace App\Image\Providers;

use App\Image\Contracts\ImageInterface;
use App\Image\Image;
use Illuminate\Support\ServiceProvider;

class ImageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ImageInterface::class, Image::class);
    }
}
