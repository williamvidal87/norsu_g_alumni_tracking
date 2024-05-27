<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $course = [
            [ 
            'college_department_id' => 1,
            'abrivation_name' => 'BSCS',
            'course_name' => 'Bachelor of Science in Computer Science',
            ],
            [ 
            'college_department_id' => 1,
            'abrivation_name' => 'BSIT',
            'course_name' => 'Bachelor of Science in Information Technology',
            ],
        ];

        Course::insert($course);
    }
}
