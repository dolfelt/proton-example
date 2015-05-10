<?php

require_once __DIR__.'/../vendor/autoload.php';

Dotenv::load(__DIR__ . '/../');

$app = new Proton\Application();


// Load middleware
$stack = (new Stack\Builder())
    ->push('App\Http\Middleware\TokenAuth');

// Load routes
require __DIR__.'/Http/routes.php';

$app = $stack->resolve($app);


return $app;