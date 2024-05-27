<?php

namespace Database\Seeders;

use App\Models\CollegeDepartment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CollegeDepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $college_department = [
            [ 
            'college_department_name' => 'CAS',
            ],
            [ 
            'college_department_name' => 'CIT',
            ],
        ];

        CollegeDepartment::insert($college_department);
    }
}
