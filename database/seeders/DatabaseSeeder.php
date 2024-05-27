<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            EmploymentStatusSeeder::class,
            SexSeeder::class,
            CivilStatusSeeder::class,
            EducationalLevelSeeder::class,
            CollegeDepartmentSeeder::class,
            CourseSeeder::class,
            TypeWorkSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
        ]);


    }
}
