<?php
namespace App\Data\Transformers;

use App\Data\Entities\User;
use App\Data\Transformer;

class UserTransformer extends Transformer {

    /**
     * Prep any columns that are global to our API
     *
     * @param \Model $model
     * @return array
     */
    public function transform(User $entity)
    {

        return [
            'firstName' => 'DanO',
        ] + self::defaults($entity);
    }
}