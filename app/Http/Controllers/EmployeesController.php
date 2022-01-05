<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ["except" => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employees = Employee::all();
        // $employees = Employee::orderBy('join_date', 'desc')->paginate(1);
        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'department' => 'required',
            'salary' => 'required',
            'join_date' => 'required',
            'marital_status' => 'required'
        ]);
        //
        $employee = new Employee();
      
        $employee->name = $request->input("name");
        $employee->email = $request->input("email");
        $employee->department = $request->input("department");
        $employee->salary = $request->input("salary");
        $employee->join_date = $request->input("join_date");
        $employee->marital_status = $request->input("marital_status");
        $employee->save();
        return redirect('/employees')->with('success', 'Employee Saved Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $employee = Employee::find($id);
        return view('employees.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $employee = Employee::find($id);
        return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'department' => 'required',
            'salary' => 'required',
            'join_date' => 'required',
            'marital_status' => 'required'
        ]);
        $employee = Employee::find($id);
      
             
        $employee->name = $request->input("name");
        $employee->email = $request->input("email");
        $employee->department = $request->input("department");
        $employee->salary = $request->input("salary");
        $employee->join_date = $request->input("join_date");
        $employee->marital_status = $request->input("marital_status");
        $employee->save();
        return redirect('/employees')->with('success', 'Employee Updated Successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $employee = Employee::find($id);
$employee->delete();
        return redirect('/employees')->with('success', 'Employee '.$employee->name.' Deleted Successfully');
    }
}
