<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get all the employees and display them
        $employees = Employee::where('user_id', Auth::user()->id)->get();
        return view('pages.settings.employee', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Return the create form view
        return view('pages.settings.employee_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Make new Employee instance from model
        $employee = new Employee;

        // Fill in the required data with the post data
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->function = $request->function;
        $employee->user_id = Auth::user()->id;

        // Save the instance to the database
        $employee->save();

        return redirect('employees');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Get the user by id
        $employee = Employee::find($id);

        // Return the view of the edit page
        return view('pages.settings.employee_edit', compact('employee'));
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
        // Update the employee by id
        $employee = Employee::find($id);

        // Validate form
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'function' => 'required'
        ]);


        // Fill in the required data with the post data
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->function = $request->function;

        // Save the employee
        $employee->save();

        // Redirect to the edit page of chosen resource
        return redirect(route('employees.edit', $employee->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Delete the employee by id
        $employee = Employee::find($id);
        $employee->delete();

        // Redirect to the index page
        return redirect(route('employees.index'));
    }
}
