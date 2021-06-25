<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Faculties::factory(10)->create();
        \App\Models\Course::factory(10)->create();
        \App\Models\DiaryContent::factory(10)->create();
        \App\Models\InternshipDiary::factory(10)->create();
        \App\Models\Week::factory(10)->create();
        \App\Models\UserHasPermission::factory(10)->create();
        \App\Models\User::factory(10)->create();
        \App\Models\GroupHasPermission::factory(10)->create();
        \App\Models\Group::factory(10)->create();
        \App\Models\Permission::factory(10)->create();

        $this->call([
            ClassesSeeder::class,
            StudentsSeeder::class,
            TeachersSeeder::class,
            UsersHasGroupsSeeder::class,
        ]);
        $this->call(companiesSeender::class); 
        // Gọi hàm companiesSeeding đã tạo ở Seeder
        $this->call(trainersSeender::class);
        //Tương tự như trên
        $this->call(catagorySeeder::class);

        $this->call(categoryCompaniesSeeder::class);

        $this->call(trainerDepartmentSeeder::class);

    }
}
