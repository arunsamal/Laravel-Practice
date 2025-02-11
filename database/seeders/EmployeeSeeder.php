<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\EmployeeModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database\json\jsonData.json');
        $employeeData = json_decode($json);
        foreach ($employeeData as $emp) {
            Employee::insert([
                "emp_name" => $emp->name,
                "emp_salary" => $emp->salary,
                "add_id" => $emp->addId
            ]);
        }
    }
}
