<?php

namespace Database\Seeders;

use App\Models\EmploymentStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmploymentStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employment_status = [
            [ 
            'employment_status_name' => 'Employed',
            ],
            [ 
            'employment_status_name' => 'Unemployed',
            ],
            [ 
            'employment_status_name' => 'Underemployed',
            ],
            [ 
            'employment_status_name' => 'Not in the labor force',
            ],
            [ 
            'employment_status_name' => 'Retired',
            ],
            [ 
            'employment_status_name' => 'Student',
            ],
            [ 
            'employment_status_name' => 'Homemaker/Caregiver',
            ],
        ];

        EmploymentStatus::insert($employment_status);
    }
}
