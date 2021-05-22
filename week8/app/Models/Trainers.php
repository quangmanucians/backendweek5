<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Trainers extends Model {
    use HasFactory;
    protected $table = 'trainers';
    
    public function trainersCompanies(){
        return $this->hasOne(Companies::class,'company_id','company_id');
    }
}
