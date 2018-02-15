<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\Models\Agent;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      Blade::if('agent', function () {
        return auth()->check() && auth()->user()->role === 'agent';
      });
      //A revoir
          if(request()->server("SCRIPT_NAME") !== 'artisan') {
              view ()->share ('agents', Agent::all ());
          }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
