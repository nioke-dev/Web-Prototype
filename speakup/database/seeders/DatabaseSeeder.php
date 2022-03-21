<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\CourseType;
use App\Models\DetailCourse;
use App\Models\DetailUser;
use App\Models\Diary;
use App\Models\Education;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DetailUser::factory(10)->create();
        $this->call([RoleSeeder::class]);
        Diary::factory(10)->create();
        Education::factory(10)->create();
        CourseType::factory(5)->create();
        Course::factory(10)->create();
        DetailCourse::factory(100)->create();
    }
}
