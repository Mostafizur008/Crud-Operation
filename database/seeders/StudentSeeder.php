<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert(

            [
                'name' => 'Jannatul Islam',
                'department_id' => '1',
                'batch_name' => 'Day01'
            ],
        );
        DB::table('students')->insert(
            [
                'name' => 'Hasan Talukder',
                'department_id' => '3',
                'batch_name' => 'Day02'
            ],
        );
        DB::table('students')->insert(
            [
                'name' => 'Rezuan Islam',
                'department_id' => '2',
                'batch_name' => 'Day03'
            ],
        );
        DB::table('students')->insert(
            [
                'name' => 'Saima Jahan',
                'department_id' => '4',
                'batch_name' => 'Day04'
            ]
        );
        DB::table('students')->insert(
            [
                'name' => 'Shihab Chowdhary',
                'department_id' => '5',
                'batch_name' => 'Day03'
            ]
        );
    }
}
