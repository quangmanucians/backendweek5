<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	$query = "insert into companies values (null,?,?,?,?,?,?)";
	for($i=0;$i<10;$i++){
            DB::insert($query,['123','abcd','abcc','kb','quang',1]);
	}
    }
}
