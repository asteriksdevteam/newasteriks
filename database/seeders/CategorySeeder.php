<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('service_category')->insert([

            [
                'category' => 'Digital Marketing',
            ],
            [
                'category' => 'Content Services',
            ],
            [
                'category' => 'Designing & Development',
            ],
            [
                'category' => 'IT Services',
            ]

        ]);
    }
}
