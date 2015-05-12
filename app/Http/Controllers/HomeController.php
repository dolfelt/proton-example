<?php
namespace App\Http\Controllers;

use App\Http\Controller;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller {

    public function index(Request $request, array $args) {

        $this->output = [
            'message' => 'Welcome!',
        ];

        return $this->send();
    }

}