<?php

namespace App\Src\Admin\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Blade::if('role', function ($role) {
            return auth()->check() && auth()->user()->{'is' . $role}();
        });

        Blade::include('admin::helpers.errors.error', 'error');

    }

    public function register()
    {
        $this->loadViewsFrom(app_path('Src/Admin/resources/views'), 'admin');
    }
}
