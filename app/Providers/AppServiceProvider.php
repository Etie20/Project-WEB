<?php

namespace App\Providers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        // Vérifier si la clé 'user' existe dans la session
        if (Session::has('user')) {
            // Récupérer la valeur de la clé 'user' dans la session
            $user = Session::get('user');

            // Partager la variable 'user' à toutes les vues de l'application
            View::share('user', $user);
        }
    }
}
