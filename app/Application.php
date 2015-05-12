<?php
namespace App;

use App\Http\Routes;
use League\Route\Strategy\RestfulStrategy;
use Proton\Application as ProtonApplication;
use Stack\Builder;

class Application extends ProtonApplication {

    /**
     * @var Routes
     */
    private $_routes;

    public function __construct($debug = true)
    {
        parent::__construct($debug);

        $this->_routes = new Routes();
    }

    public function loadRoutes()
    {
        $this->getRouter()->setStrategy(new RestfulStrategy);

        $this->_routes->load($this);
    }

    public function runStack()
    {
        $this->loadRoutes();

        // TODO: Move the middleware somewhere
        $stack = (new Builder())
            ->push('App\Http\Middleware\TokenAuth');

        $app = $stack->resolve($this);

        \Stack\run($app);
    }
}