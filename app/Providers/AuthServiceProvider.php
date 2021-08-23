<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('financeiro', function ($user) {

            if ($user->perfil == 1){
                return true;
            }

            return false;

        });
        Gate::define('prevenda', function ($user) {

            if ($user->perfil == 2){
                return true;
            }

            return false;

        });
        Gate::define('venda', function ($user) {

            if ($user->perfil == 3){
                return true;
            }

            return false;

        });
        Gate::define('gestor', function ($user) {

            if ($user->perfil == 4){
                return true;
            }

            return false;

        });
        Gate::define('gav', function ($user) {

            if ($user->perfil == 5){
                return true;
            }

            return false;

        });
        Gate::define('admin', function ($user) {

            if ($user->perfil == 0){
                return true;
            }

            return false;

        });
    }

}
