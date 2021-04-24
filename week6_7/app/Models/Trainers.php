<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Trainers extends Model {
    use HasFactory;
    protected $table = 'trainers';
    
    public function search($value) {
        return self::where('trainers_name', 'like', '%'.$value.'%')->orwhere('trainers_email', 'like', '%'.$value.'%')->paginate(20) ;
    }
}
