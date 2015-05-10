<?php
namespace App\Providers;

use League\Container\ServiceProvider;

class DatabaseServiceProvider extends ServiceProvider {

    protected $provides = [
        'db',
        'Data\Database'
    ];

    public function register() {

    }
}