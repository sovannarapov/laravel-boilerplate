<?php

namespace Mangopie\Repository\Repositories;

use Prettus\Repository\Contracts\CacheableInterface;
use Prettus\Repository\Eloquent\BaseRepository as BaseRepo;
use Prettus\Repository\Traits\CacheableRepository;

/**
 * Class BaseRepository.
 */
abstract class BaseRepository extends BaseRepo implements CacheableInterface
{
    use CacheableRepository;
}
