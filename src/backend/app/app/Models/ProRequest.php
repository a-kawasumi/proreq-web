<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cache;

class ProRequest extends Model
{
    const STATUS_VALID = 0;
    const EMPLOYEE_TYPE_MEMBER = 0;

}
