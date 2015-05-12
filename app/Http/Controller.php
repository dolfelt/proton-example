<?php
namespace App\Http;

use League\Fractal\Manager as FractalManager;
use League\Fractal\Resource\Collection as FractalCollection;
use League\Fractal\Resource\Item as FractalItem;
use League\Fractal\Serializer\JsonApiSerializer;
use League\Fractal\TransformerAbstract;
use Symfony\Component\HttpFoundation\JsonResponse;

class Controller {

    protected $fractal;

    protected $output = [];

    public function __construct()
    {
        $this->fractal = new FractalManager();
        $this->fractal->setSerializer(new JsonApiSerializer());
    }

    public function send($http = 200, $headers = []) {
        return new JsonResponse($this->output, $http, $headers);
    }

    public function addData($key, $data, TransformerAbstract $transformer = null) {

        if ($transformer !== null) {
            if (is_array($data)) {
                $resource = new FractalCollection($data, $transformer, $key);
            }
            elseif ($data) {
                $resource = new FractalItem($data, $transformer, $key);
            }
            else {
                throw new \Exception("Must be a model or collection.");
            }
            $transformed = $this->fractal->createData($resource)->toArray();
        }
        else {
            $transformed = [$key => $data];
        }

        $this->output = array_merge($this->output, $transformed);

        return $this;
    }
}