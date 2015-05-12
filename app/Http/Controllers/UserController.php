<?php
namespace App\Http\Controllers;

use App\Data\Entities\User;
use App\Data\Transformers\UserTransformer;
use App\Http\Controller;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller {

    public function index(Request $request, array $args) {

        $this->addData('users', [
            new User(),
            new User(),
        ], new UserTransformer());

        return $this->send();
    }

}