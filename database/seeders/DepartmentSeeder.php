<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;
use Illuminate\Support\Str;


class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = [
            [
                'id'                => 1,
                'department_name'   => 'department '.Str::random(10),
                'salary'            => 1000
            ],
            [
                'id'                => 2,
                'department_name'   => 'department '.Str::random(10),
                'salary'            => 2000
            ],
            [
                'id'                => 3,
                'department_name'   => 'department '.Str::random(10),
                'salary'            => 1100
            ],
            [
                'id'                => 4,
                'department_name'   => 'department '.Str::random(10),
                'salary'            => 1100
            ],
            [
                'id'                => 5,
                'department_name'   => 'department '.Str::random(10),
                'salary'            => 1000
            ],
            [
                'id'                => 6,
                'department_name'   => 'department '.Str::random(10),
                'salary'            => 1000
            ],
            [
                'id'                => 7,
                'department_name'   => 'department '.Str::random(10),
                'salary'            => 2000
            ],
            [
                'id'                => 8,
                'department_name'   => 'department '.Str::random(10),
                'salary'            => 3000
            ],
            [
                'id'                => 9,
                'department_name'   => 'department '.Str::random(10),
                'salary'            => 3000
            ],
            [
                'id'                => 10,
                'department_name'   => 'department '.Str::random(10),
                'salary'            => 1000
            ],
            [
                'id'                => 12,
                'department_name'   => 'department '.Str::random(10),
                'salary'            => 1000
            ],
            [
                'id'                => 13,
                'department_name'   => 'department '.Str::random(10),
                'salary'            => 1100
            ],
            [
                'id'                => 14,
                'department_name'   => 'department '.Str::random(10),
                'salary'            => 1500
            ],
            [
                'id'                => 15,
                'department_name'   => 'department '.Str::random(10),
                'salary'            => 1800
            ],
            [
                'id'                => 16,
                'department_name'   => 'department '.Str::random(10),
                'salary'            => 1600
            ],
            [
                'id'                => 17,
                'department_name'   => 'department '.Str::random(10),
                'salary'            => 1600
            ],
            [
                'id'                => 18,
                'department_name'   => 'department '.Str::random(10),
                'salary'            => 1400
            ],
            [
                'id'                => 19,
                'department_name'   => 'department '.Str::random(10),
                'salary'            => 3000
            ],
            [
                'id'                => 20,
                'department_name'   => 'department '.Str::random(10),
                'salary'            => 4000
            ],

        ];

        Department::insert($departments);
    }
}
