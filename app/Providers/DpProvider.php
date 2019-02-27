<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
 
class DpProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(Request $req)
    {
            
           //view::share('key', '20');

  

              
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // view::share('key', '10');


    //  App()->bind('Payment1', function() {
    //     return new \App\Payment1;
    // });


       
    }
}
