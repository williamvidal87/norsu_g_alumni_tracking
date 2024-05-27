<?php

namespace Database\Seeders;

use App\Models\EducationalLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationalLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $educational_level = [
            [ 
            'educational_level_name' => 'HS',
            ],
            [ 
            'educational_level_name' => 'COLLEGE',
            ],
        ];

        EducationalLevel::insert($educational_level);
    }
}
