<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use SoftDeletes  ,SoftDeletes;
    protected $table = 'classes';
}
