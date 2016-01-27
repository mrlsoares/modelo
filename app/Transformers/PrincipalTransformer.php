<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Principal;

/**
 * Class PrincipalTransformer
 * @package namespace App\Transformers;
 */
class PrincipalTransformer extends TransformerAbstract
{

    /**
     * Transform the \Principal entity
     * @param \Principal $model
     *
     * @return array
     */
    public function transform(Principal $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
