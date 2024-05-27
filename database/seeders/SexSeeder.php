<?php

namespace Database\Seeders;

use App\Models\Sex;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sex = [
            [ 
            'sex_name' => 'Male',
            ],
            [ 
            'sex_name' => 'Female',
            ],
        ];

        Sex::insert($sex);
    }
}
