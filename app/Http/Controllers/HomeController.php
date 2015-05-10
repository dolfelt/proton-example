<?php
namespace App\Http\Controllers;

use App\Http\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller {

    public function index(Request $request, Response $response, array $args) {
        $response->setContent('<h1>It works!</h1>');
        return $response;
    }

}