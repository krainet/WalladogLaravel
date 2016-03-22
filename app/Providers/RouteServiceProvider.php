<?php

namespace Walladog\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    //protected $namespace = 'Walladog\Http\Controllers';
    protected $webNamespace = 'Walladog\Http\Controllers';

    protected $apiNamespace = 'Walladog\Http\Controllers\Api';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function boot(Router $router)
    {
        //

        parent::boot($router);
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function map(Router $router)
    {
        /*
         * TODO: remove this
        
        $router->group(['namespace' => $this->namespace], function ($router) {
            require app_path('Http/routes.php');
        });
        
        */

        /*
        |--------------------------------------------------------------------------
        | Web Router 
        |--------------------------------------------------------------------------
        */

        $router->group(['namespace' => $this->webNamespace], function ($router) {
            require app_path('Http/routes.web.php');
        });

        /*
        |--------------------------------------------------------------------------
        | Api Router 
        |--------------------------------------------------------------------------
        */

        $router->group(['namespace' => $this->apiNamespace], function ($router) {
            require app_path('Http/routes.api.php');
        });
        
        
    }
}
