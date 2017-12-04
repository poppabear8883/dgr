<?php

namespace App\Gallery\Providers;

use App\Gallery\Contracts\GalleryInterface;
use App\Gallery\Repositories\GalleryRepository;
use Illuminate\Support\ServiceProvider;

class GalleryServiceProvider extends ServiceProvider
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
        $this->app->bind(GalleryInterface::class, GalleryRepository::class);
    }
}
