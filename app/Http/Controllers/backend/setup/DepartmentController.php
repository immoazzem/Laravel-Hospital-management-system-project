<?php

namespace App\Http\Controllers\backend\setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\Department;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Departments = Department::all();
       return view('backend/setup/department/department', compact('Departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'dept_name' => 'required|string|max:100',           
            'dept_details' => 'required|max:200',           
            'dept_status' => 'required|string',           
        ]);

        // $info = array(
        //     'message' => "Holidays Class Added successfull",
        //     'alert-type' => 'success'
        // );

        $Department = new Department;
        $Department->dept_name = $request->dept_name; 
        $Department->dept_details = $request->dept_details; 
        $Department->dept_status = $request->dept_status; 
        $Department->save();
        return redirect('/admin/department')->with('success', 'Department created successfully.');
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
        $EditDepartment = Department::find($id);
        return view('backend/setup/department/edit-department', compact('EditDepartment'));
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
        $request->validate([
            'dept_name' => 'required|string|max:100',           
            'dept_details' => 'required|max:200',           
            'dept_status' => 'required|string',           
        ]);

        // $info = array(
        //     'message' => "Holidays Class Added successfull",
        //     'alert-type' => 'success'
        // );

        $UpdateDepartment = Department::find($id);
        $UpdateDepartment->dept_name = $request->dept_name; 
        $UpdateDepartment->dept_details = $request->dept_details; 
        $UpdateDepartment->dept_status = $request->dept_status; 
        $UpdateDepartment->save();
        return redirect('/admin/department')->with('success', 'Department Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $DeleteDepartment = Department::find($id);
        $DeleteDepartment->delete();
        return redirect('/admin/department')->with('success', 'Department Delete successfully.');

    }
}
