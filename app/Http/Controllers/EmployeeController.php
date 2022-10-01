<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Department;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'number' => 'integer|min:5,max:50'
        ]);

        if(!empty($request->number))
        {

            $getIdsMaxSalary = Department::orderBy('salary', 'desc')->take($request->number)->get()->pluck('id');
            $results = Employee::with(['departments' => function($q) use ($getIdsMaxSalary){
                $q->whereIn('id',$getIdsMaxSalary);
            }])->get();
        }else{
            $getIdsMaxSalary = Department::orderBy('salary', 'desc')->take(3)->get()->pluck('id');
            $results = Employee::with(['departments' => function($q) use ($getIdsMaxSalary){
                $q->whereIn('id',$getIdsMaxSalary);
            }])->get();
        }

        //return $results;
        return view('employees', compact('results'));
    }
}
