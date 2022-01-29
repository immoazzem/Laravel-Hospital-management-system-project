<?php

namespace App\Http\Controllers\backend\lab;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\LabDepartment;
use App\Models\backend\LabTest;
use App\Models\backend\Doctors;
use App\Models\backend\OutPatient;

class LabTeastController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $LabDepartments = LabDepartment::all();
        $Doctors = Doctors::all();
        $OutPatients = OutPatient::all();
        $LabTests = LabTest::all();
        return view('backend/lab/lab', compact('LabTests', 'LabDepartments', 'Doctors', 'OutPatients'));
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
            'name' => 'required|string',
            'doc_id' => 'required|string',
            'out_p_id' => 'nullable|string',
            'in_p_id' => 'nullable|string',
            'lab_department' => 'required|string',
            'price' => 'required|string',
            'date_of_test' => 'required|date',
                          
        ]);
       

        // $info = array(
        //     'message' => "Holidays Class Added successfull",
        //     'alert-type' => 'success'
        // );

        $LabTest = new LabTest;
        $LabTest->name = $request->name;       
        $LabTest->doc_id = $request->doc_id; 

        if($request->out_p_id)  {
            $LabTest->out_p_id = $request->out_p_id; 
        } else {
            $LabTest->out_p_id = 0; 
        }   

        if($request->in_p_id)  {
            $LabTest->in_p_id = $request->in_p_id; 
        } else {
            $LabTest->in_p_id = 0; 
        }    

        $LabTest->lab_department = $request->lab_department;       
        $LabTest->price = $request->price;       
        $LabTest->date_of_test = $request->date_of_test;       
        $LabTest->save();
        return redirect('admin/labtest')->with('success', 'LabTest created successfully.');
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
        $LabDepartments = LabDepartment::all();
        $EditLabTest = LabTest::find($id);    
        return view('backend/lab/edit-lab', compact('EditLabTest', 'LabDepartments'));
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
            'name' => 'required|string',
            'doc_id' => 'required|string',
            'out_p_id' => 'nullable|string',
            'in_p_id' => 'nullable|string',
            'lab_department' => 'required|string',
            'price' => 'required|string',
            'date_of_test' => 'required|date',
                                               
        ]);

        // $info = array(
        //     'message' => "Holidays Class Added successfull",
        //     'alert-type' => 'success'
        // );

        $UpdateLabTest = LabTest::find($id);
        $UpdateLabTest->name = $request->name;       
        $UpdateLabTest->doc_id = $request->doc_id; 

        if($request->out_p_id)  {
            $UpdateLabTest->out_p_id = $request->out_p_id; 
        } else {
            $UpdateLabTest->out_p_id = "Empty"; 
        }   

        if($request->in_p_id)  {
            $UpdateLabTest->in_p_id = $request->in_p_id; 
        } else {
            $UpdateLabTest->in_p_id = "Empty"; 
        }    

        $UpdateLabTest->lab_department = $request->lab_department;       
        $UpdateLabTest->price = $request->price;       
        $UpdateLabTest->date_of_test = $request->date_of_test;      
        $UpdateLabTest->update();
        return redirect('admin/labtest')->with('success', 'LabTest Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $DeleteLabTest = LabTest::find($id);
        $DeleteLabTest->delete();
        return redirect('admin/labtest')->with('success', 'LabTest Delete successfully.');

    }
}
