<?php

namespace Mangopie\Repository\Presenters;

use Exception;
use Prettus\Repository\Presenter\FractalPresenter;

abstract class BasePresenter extends FractalPresenter
{
    /**
     * BasePresenter constructor.
     *
     * @throws Exception
     */
    public function __construct()
    {
        parent::__construct();
    }
}
