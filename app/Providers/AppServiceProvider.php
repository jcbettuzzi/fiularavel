<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Restapiappel as Restapiappel;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;

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
    public function boot(): void
    {
        //
        View::composer('*', function ($view) {
            if (Session::get('usersigne') == 1) {
                $restapiappel = new Restapiappel();
                $fiuID = Session::get('fiuID');
                $uuID = Session::get('uuID');
                $mesRechercheUserFiu = $restapiappel->appeldemandeoffreByUserFiu($fiuID, $uuID);
                $view->with('mesRechercheUserFiu', $mesRechercheUserFiu);
            }
        });
    }
}
