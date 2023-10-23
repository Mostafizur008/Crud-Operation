<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('results')->insert(

            [
                'student_id' => '1',
                'gpa' => '3.50',
                'date' => '2023-10-06'
            ],
        );
        DB::table('results')->insert(
            [
                'student_id' => '2',
                'gpa' => '4.80',
                'date' => '2023-10-06'
            ],
        );
        DB::table('results')->insert(
            [
                'student_id' => '3',
                'gpa' => '4.20',
                'date' => '2023-10-06'
            ],
        );
        DB::table('results')->insert(
            [
                'student_id' => '4',
                'gpa' => '3.00',
                'date' => '2023-10-06'
            ]
        );
        DB::table('results')->insert(
            [
                'student_id' => '5',
                'gpa' => '4.50',
                'date' => '2023-10-06'
            ]
        );
    }
}
