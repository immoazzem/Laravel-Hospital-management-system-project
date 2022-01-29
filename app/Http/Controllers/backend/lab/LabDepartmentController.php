<?php

namespace App\Http\Controllers\backend\lab;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\LabDepartment;

class LabDepartmentController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $LabDepartments = LabDepartment::all();
        return view('backend/lab/labdepartment', compact('LabDepartments'));
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

        $LabDepartment = new LabDepartment;
        $LabDepartment->name = $request->name;       
        $LabDepartment->save();
        return redirect('admin/labdepartment')->with('success', 'LabDepartment created successfully.');
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
        $EditLabDepartment = LabDepartment::find($id);    
        return view('backend/lab/edit-labdepartment', compact('EditLabDepartment'));
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

        $UpdateLabDepartment = LabDepartment::find($id);
        $UpdateLabDepartment->name = $request->name; 
       
        $UpdateLabDepartment->update();
        return redirect('admin/labdepartment')->with('success', 'LabDepartment Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $DeleteLabDepartment = LabDepartment::find($id);
        $DeleteLabDepartment->delete();
        return redirect('admin/labdepartment')->with('success', 'LabDepartment Delete successfully.');

    }
}
