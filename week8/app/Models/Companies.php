<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Companies extends Model {
    use HasFactory;
    protected $table = 'companies';
    
   
    public function companiesTrainers(){
        return $this->hasOne(Trainers::class,'company_id','company_id');
    }
    public function companiesCategories(){
        return $this->hasMany(Categories::class,'category_id','category_id');
    }
    public function search($input)
    {
        $data = self::where('company_name','like',"%$input%")->paginate(25);
        return $data;
    }
}
