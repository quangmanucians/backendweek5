<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categories extends Model {
    use HasFactory;
    protected $table = 'categories';
    
    public function search($value) {
        return self::where('categories_name', 'like', '%'.$value.'%')->orwhere('categories_name', 'like', '%'.$value.'%')->paginate(20) ;
    }
}

