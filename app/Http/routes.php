<?php
namespace App\Http;

use App\Application;

class Routes {

    // TODO: Quick defining of the routes perhaps...
    private $_routes = [

    ];

    /**
     * Load all the routes for this application
     *
     * @param Application $app
     */
    public function load(Application $app) {

        $app->get('/', 'App\Http\Controllers\HomeController::index');

        $app->get('/users', 'App\Http\Controllers\UserController::index');


    }
}
