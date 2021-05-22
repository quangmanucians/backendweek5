<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Categories;


class CategoriesController extends Controller {

    public function categories() {
        $obj = new Categories();
        $categories = $obj->paginate(25);
        
        return view('categories', ['categories' => $categories]);
         $categories = $obj->pluck('categories_name', 'categories_id');
        return view('categories',['categories'=>$categories]);
    }

}
