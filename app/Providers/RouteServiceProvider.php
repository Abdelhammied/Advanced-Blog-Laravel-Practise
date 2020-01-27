<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    const HOME = '/dashboard';

    protected $namespace = 'App\Http\Controllers';

    protected $admin_namespace = 'App\Src\Admin\Http\Controllers';

    protected $user_namespace = 'App\Src\User\Http\Controllers';

    protected $frontend_namespace = 'App\Src\Frontend\Http\Controllers';


    public function boot()
    {
        //

        parent::boot();
    }

    public function map()
    {
        // $this->mapApiRoutes();

        // $this->mapWebRoutes();

        $this->mapAdminRoutes();

        $this->mapUserRoutes();

        //
    }

    protected function mapWebRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
    }

    protected function mapApiRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));
    }

    protected function mapAdminRoutes()
    {
        Route::domain(env("ADMIN_URL"))
            ->middleware(['web', 'admin'])
            ->as('admin.')
            ->namespace($this->admin_namespace)
            ->group(app_path('Src/Admin/routes/web.php'));

        Route::domain(env("ADMIN_URL"))
            ->middleware(['web', 'guest'])
            ->as('admin.')
            ->namespace($this->admin_namespace . '\Auth')
            ->group(app_path('Src/Admin/routes/auth.php'));
    }

    protected function mapUserRoutes()
    {
        Route::domain(env("USER_URL"))
            ->middleware(['web', 'user'])
            ->as('user.')
            ->namespace($this->user_namespace)
            ->group(app_path('Src/User/routes/web.php'));

        Route::domain(env("USER_URL"))
            ->middleware('web')
            ->as('user.')
            ->namespace($this->user_namespace)
            ->group(app_path('Src/User/routes/auth.php'));
    }

    protected function mapFrontendRoutes()
    {
        Route::domain(env("APP_URL"))
            ->middleware(['web', 'frontend'])
            ->as('frontend.')
            ->namespace($this->frontend_namespace)
            ->group(app_path('Src/Frontend/routes/web.php'));

        Route::domain(env("APP_URL"))
            ->middleware('web')
            ->as('frontend.')
            ->namespace($this->frontend_namespace)
            ->group(app_path('Src/Frontend/routes/auth.php'));
    }
}
