<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Employee;
use App\Models\Department;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 100) as $item) {
            $Employee = Employee::create([
                'id' => $item,
                'employee_name' => Str::random(10),
                'phone_number' => rand(111111111,999999999),
            ]);

            $rand = rand(1, 3);
            $departments = Department::inRandomOrder()->take($rand)->get();

            $Employee->departments()->sync($departments->pluck('id'));
        }
        
    }
}
