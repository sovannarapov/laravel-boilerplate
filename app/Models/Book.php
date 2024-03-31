<?php

namespace App\Models;

use Mangopie\Core\Models\BaseModel;

/**
 * Class Book.
 */
class Book extends BaseModel
{
    protected $fillable = [
        'title',
        'author',
        'description',
    ];
}
