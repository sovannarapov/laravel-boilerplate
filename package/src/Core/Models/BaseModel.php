<?php

namespace Mangopie\Core\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mangopie\Core\Traits\DatesAttributes;

class BaseModel extends Model
{
    use DatesAttributes, HasFactory;
}
