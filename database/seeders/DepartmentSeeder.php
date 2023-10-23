<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('departments')->insert(

            [
                'department_name' => 'Chemistry'
            ],
        );
        DB::table('departments')->insert(
            [
                'department_name' => 'Political science'
            ],
        );
        DB::table('departments')->insert(
            [
                'department_name' => 'Human Resources'
            ],
        );
        DB::table('departments')->insert(
            [
                'department_name' => 'Marketing'
            ]
        );
        DB::table('departments')->insert(
            [
                'department_name' => 'Biology'
            ]
        );
    }
}
