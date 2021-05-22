<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Companies;
use Illuminate\Http\Request;

class CompaniesController extends Controller {

    public function companies(Request $request) {
        $obj = new Companies();
        $companies = $obj->all();
        $companies = $obj->paginate(25);
//        $companies = $obj->search('abcd');
        return view('companies', ['companies' => $companies]);
    }

}
