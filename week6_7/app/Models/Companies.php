<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Companies extends Model {
    use HasFactory;
    protected $table = 'companies';
    public function search($input)
    {
        $data = self::where('company_name','like',"%$input%")->paginate(25);
        return $data;
    }
}
