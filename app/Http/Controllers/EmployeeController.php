<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function getAllEmployeeData()
    {
        $employees = DB::table('employees')->get();
        return view('showEmployeeData', ['data' => $employees]);
    }
}
