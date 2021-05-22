<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Trainers;
use \Illuminate\Http\Request;

class SearchController extends Controller {

    public function search(Request $request) {
        
        $obj = new Trainers();
        $trainers = $obj->search($request->get('search'));
        return view('search', ['search' => $trainers]);
        
    }

}
