<?php

namespace App\Src\Frontend\Providers;

use Illuminate\Support\ServiceProvider;

class FrontendServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadViewsFrom(app_path('Src/Frontend/resources/views'), 'frontend');
    }
}
