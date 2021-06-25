<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DiaryContent extends Model
{
    use HasFactory ,SoftDeletes;
    protected $table = 'diary_content';
}
