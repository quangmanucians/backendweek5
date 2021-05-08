<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	$query = "insert into categories values (null,?)";
	for($i=0;$i<40000;$i++){
		DB::insert($query,['quang']);
	}
        //
    }
}
