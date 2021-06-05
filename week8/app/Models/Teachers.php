<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    use SoftDeletes;
    protected $table = 'teachers';
}
