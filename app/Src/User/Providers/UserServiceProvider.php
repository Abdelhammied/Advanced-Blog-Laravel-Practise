<?php

namespace App\Src\User\Providers;

use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadViewsFrom(app_path('Src/User/resources/views'), 'user');
    }
}
