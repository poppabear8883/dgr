<?php

namespace App\Contact\Providers;

use App\Contact\Contracts\ContactInterface;
use App\Contact\Repositories\ContactRepository;
use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(ContactInterface::class, ContactRepository::class);
    }
}