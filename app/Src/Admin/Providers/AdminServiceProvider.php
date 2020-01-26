<?php

namespace App\Src\Admin\Providers;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadViewsFrom(app_path('Src/Admin/resources/views'), 'admin');
    }
}
