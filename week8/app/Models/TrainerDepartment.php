<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class TrainerDepartment extends Model
{
    use SoftDeletes;
    protected $table = 'trainer_department';

}

