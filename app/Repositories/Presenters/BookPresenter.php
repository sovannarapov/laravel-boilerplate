<?php

namespace App\Repositories\Presenters;

use App\Repositories\Transformers\BookTransformer;
use Mangopie\Repository\Presenters\BasePresenter;

/**
 * Class BookPresenter.
 */
class BookPresenter extends BasePresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new BookTransformer();
    }
}
