<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserHasPermission extends Model
{
    use HasFactory ,SoftDeletes;
    protected $table = 'user_has_permission';
}
