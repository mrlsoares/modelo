<?php

namespace App\Presenters;

use App\Transformers\PrincipalTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class PrincipalPresenter
 *
 * @package namespace App\Presenters;
 */
class PrincipalPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new PrincipalTransformer();
    }
}
