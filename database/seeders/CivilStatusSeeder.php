<?php

namespace Database\Seeders;

use App\Models\CivilStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CivilStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $civil_status = [
            [ 
            'civil_status_name' => 'Single',
            ],
            [ 
            'civil_status_name' => 'Married',
            ],
            [ 
            'civil_status_name' => 'Divorced',
            ],
            [ 
            'civil_status_name' => 'Widowed',
            ],
        ];

        CivilStatus::insert($civil_status);
    }
}
