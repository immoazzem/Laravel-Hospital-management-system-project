<?php

namespace App\Http\Controllers\backend\hrm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\EmployeeRole;

class EmployeeRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $EmployeeRoles = EmployeeRole::all();
        return view('backend/hrm/employee-role', compact('EmployeeRoles'));
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
            'name' => 'required',
                          
        ]);
        // $info = array(
        //     'message' => "Holidays Class Added successfull",
        //     'alert-type' => 'success'
        // );

        $EmployeeRole = new EmployeeRole;
        $EmployeeRole->name = $request->name;       
        $EmployeeRole->save();
        return redirect('admin/employee-role')->with('success', 'EmployeeRole created successfully.');
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
        $EditEmployeeRole = EmployeeRole::find($id);    
        return view('backend/hrm/edit-employee-role', compact('EditEmployeeRole'));
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
            'name' => 'required',
                                               
        ]);

        // $info = array(
        //     'message' => "Holidays Class Added successfull",
        //     'alert-type' => 'success'
        // );

        $UpdateEmployeeRole = EmployeeRole::find($id);
        $UpdateEmployeeRole->name = $request->name; 
       
        $UpdateEmployeeRole->update();
        return redirect('admin/employee-role')->with('success', 'EmployeeRole Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $DeleteEmployeeRole = EmployeeRole::find($id);
        $DeleteEmployeeRole->delete();
        return redirect('admin/employee-role')->with('success', 'EmployeeRole Delete successfully.');

    }
}
