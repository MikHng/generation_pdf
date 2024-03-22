<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\informationrapport;

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
   /* public function boot()
    {
        $Valeurnomstructure = Informationrapport::latest()->value('nomstructure');
        $Valeurannee = Informationrapport::latest()->value('annee');
        $Valeurnomdfc = Informationrapport::latest()->value('nomdfc');
        $Valeurnomdir = Informationrapport::latest()->value('nomdir');
        view()->share('nomstructure', $Valeurnomstructure);
        view()->share('annee', $Valeurannee);
        view()->share('nomdfc', $Valeurnomdfc);
        view()->share('nomdir', $Valeurnomdir);
    }*/
}
