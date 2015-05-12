<?php
namespace App\Data;

use League\Fractal\TransformerAbstract;

class Transformer extends TransformerAbstract {

    /**
     * Prep any columns that are global to our API
     *
     * @param \Model $model
     * @return array
     */
    public function defaults(Entity $entity)
    {

        $data = [
            'default' => true,
        ];

        // Do default data manipulation here.

        return $data;
    }
}