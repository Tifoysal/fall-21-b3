<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function list(){
        $employees=Employee::all();
        // dd($employees);
        return view('admin.layouts.employee-list',compact('employees'));
    }

    public function create(){
        return view('admin.layouts.employee-create');
    }

    public function store(Request $request){
        // dd($request->all());
        Employee::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,
        ]);

        return redirect()->back();
    }
}
