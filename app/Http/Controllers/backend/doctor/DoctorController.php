<?php

namespace App\Http\Controllers\backend\doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\Doctors;
use App\Models\backend\Department;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $Doctors = Doctors::all();
        return view('backend/doctor/doctor', compact('Doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Departments = Department::all();
        return view('backend/doctor/add-doctor', compact('Departments'));
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
            'doc_name'    => 'required|string|max:50',
            'doc_specialist'    => 'required|string|max:50',
            'doc_education'    => 'required|string|max:50',
	    	'doc_address' => 'required|max:200',
	    	'doc_phone'   => 'required',
	    	'doc_email'   => 'required|email',
	    	'doc_password'   => 'required',
	    	'doc_gender'     => 'required',
	    	'doc_blood'   => 'required',                                                     
	    	'doc_address'   => 'string|max:150',                            
	    	'doc_img'   => 'required|mimes:jpg,png,jpeg|max:2048',                            
        ]);
        // $info = array(
        //     'message' => "Holidays Class Added successfull",
        //     'alert-type' => 'success'
        // );
       
        $Doctors = new Doctors;
        $Doctors->doc_name = $request->doc_name; 
        $Doctors->doc_specialist = $request->doc_specialist; 
        $Doctors->doc_education = $request->doc_education; 
        $Doctors->doc_gender = $request->doc_gender; 
        $Doctors->doc_phone = $request->doc_phone; 
        $Doctors->doc_password = $request->doc_password; 
        $Doctors->doc_email = $request->doc_email; 
        $Doctors->doc_blood = $request->doc_blood; 
        $Doctors->doc_address = $request->doc_address; 
        $Doctors->doc_dept_id = $request->doc_dept_id; 
        if ($request->file('doc_img')) {
            $photoname = $request->file('doc_img')->getClientOriginalName();
            $request->doc_img->storeAs('public/images', $photoname);
            $Doctors->doc_img = $photoname; 
           }

        $Doctors->save();
        return redirect('admin/doctor')->with('success', 'Doctors created successfully.');
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
        // $MedicineCompanys = MedicineCompany::all();
        // $MedicineGroups =  MedicineGroup::all();
        $EditDoctors = Doctors::find($id);    
        return view('backend/patient/edit-outpatient', compact('EditDoctors'));
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
            'doc_name'    => 'required|string|max:50',
	    	'doc_age'     => 'required|integer',
	    	'doc_address' => 'required',
	    	'doc_phone'   => 'required',
	    	'doc_gender'     => 'required',
	    	'doc_blood'   => 'required',                            
	    	'doc_symptoms'   => 'string|max:200',                            
	    	'doc_address'   => 'string|max:150',                            
        ]);

        // $info = array(
        //     'message' => "Holidays Class Added successfull",
        //     'alert-type' => 'success'
        // );

        $UpdateDoctors = Doctors::find($id);
        $UpdateDoctors->doc_name = $request->doc_name; 
        $UpdateDoctors->doc_father_name = $request->doc_father_name; 
        $UpdateDoctors->doc_gender = $request->doc_gender; 
        $UpdateDoctors->doc_age = $request->doc_age; 
        $UpdateDoctors->doc_phone = $request->doc_phone; 
        $UpdateDoctors->doc_blood = $request->doc_blood; 
        $UpdateDoctors->doc_height = $request->doc_height; 
        $UpdateDoctors->doc_weight = $request->doc_weight; 
        $UpdateDoctors->doc_bp = $request->doc_bp; 
        $UpdateDoctors->doc_symptoms = $request->doc_symptoms; 
        $UpdateDoctors->doc_address = $request->doc_address; 
        $UpdateDoctors->save();
        return redirect('admin/outpatient')->with('success', 'Doctors Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $DeleteDoctors = Doctors::find($id);
        $DeleteDoctors->delete();
        return redirect('admin/outpatient')->with('success', 'Doctors Delete successfully.');

    }
}
