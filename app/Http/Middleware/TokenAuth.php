<?php
namespace App\Http\Middleware;

use Proton\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\HttpKernelInterface;

class TokenAuth implements HttpKernelInterface {

    private $app;
    private $container;

    public function __construct(Application $app, array $options = [])
    {
        $this->app = $app;
        $this->container = $app->getContainer();
    }

    public function handle(Request $request, $type = HttpKernelInterface::MASTER_REQUEST, $catch = true)
    {
        // TODO: Do some sort of authentication here.

        return $this->app->handle($request, $type, $catch);
    }

}