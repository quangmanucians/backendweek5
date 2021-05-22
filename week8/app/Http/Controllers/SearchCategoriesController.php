<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
class SearchCategoriesController extends Controller
{
    public function search(Request $request)
    {
        $obj = new Companies();       
        $key = $request->input('categories_id');

        if($key){     
            $results = $obj->search($key);
            return view('searchCompanies',['results'=>$results]);
        }
        return view('searchCompanies',[]);
    }
}

