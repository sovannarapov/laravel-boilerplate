<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\Eloquents\BookRepository;
use App\Repositories\Presenters\BookPresenter;
use Mangopie\Core\Controllers\WebController;

class BookController extends WebController
{
    protected BookRepository $repository;

    protected string $name = 'book';

    public function __construct(BookRepository $repository)
    {
        parent::__construct();
        $this->repository = $repository;
        $this->repository->setPresenter(BookPresenter::class);
    }
}
