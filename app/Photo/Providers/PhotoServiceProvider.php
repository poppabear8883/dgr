<?php

namespace App\Photo\Providers;

use App\Photo\Contracts\PhotoInterface;
use App\Photo\Repositories\PhotoRepository;
use Illuminate\Support\ServiceProvider;

class PhotoServiceProvider extends ServiceProvider
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
        $this->app->bind(PhotoInterface::class, PhotoRepository::class);
    }
}
