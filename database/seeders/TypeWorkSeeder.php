<?php

namespace Database\Seeders;

use App\Models\TypeWork;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeWorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $type_work = [
            [ 
            'type_work_name' => 'Goverment',
            ],
            [ 
            'type_work_name' => 'Private',
            ],
        ];

        TypeWork::insert($type_work);
    }
}
