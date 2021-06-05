<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Trainers extends Model
{
    use SoftDeletes;
    protected $table = 'trainers';

    }
}
