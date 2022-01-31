<?php

namespace App\Http\Controllers\backend\patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\InPatient;

class InPatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $InPatients = InPatient::all();
        return view('backend/patient/inpatient', compact('InPatients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend/patient/add-inpatient');
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
            'in_p_name'           => 'required',
            'in_p_sex'            => 'required',
            'in_p_age'            => 'required',
            'in_p_phone'          => 'required',
            'in_p_guardian_name'  => 'required',
            'in_p_guardian_phone' => 'required',
            'in_p_blood'          => 'required',
            'in_p_address'        => 'required',
            'in_p_admission_date' => 'required',
            'in_p_case'           => 'required',
            'in_p_doc_id'         => 'required',
            'in_p_bed_category_id'=> 'required',
            'in_p_bed_id'         => 'required'                           
        ]);
        // $info = array(
        //     'message' => "Holidays Class Added successfull",
        //     'alert-type' => 'success'
        // );

       // $id = IdGenerator::generate(['table' => 'out_patients', 'field'=>'out_p_id', 'length' => 8, 'prefix' =>'OUT-PET-']);

       // $last = 1;
        //$last = DB::table('out_patients')->latest()->first();
       
        $InPatient = new InPatient;
        $InPatient->out_p_name = $request->out_p_name; 
        $InPatient->out_p_father_name = $request->out_p_father_name; 
        $InPatient->out_p_gender = $request->out_p_gender; 
        $InPatient->out_p_age = $request->out_p_age; 
        $InPatient->out_p_phone = $request->out_p_phone; 
        $InPatient->out_p_blood = $request->out_p_blood; 
        $InPatient->out_p_height = $request->out_p_height; 
        $InPatient->out_p_weight = $request->out_p_weight; 
        $InPatient->out_p_bp = $request->out_p_bp; 
        $InPatient->out_p_symptoms = $request->out_p_symptoms; 
        $InPatient->out_p_address = $request->out_p_address; 
        $InPatient->save();
        return redirect('admin/inpatient')->with('success', 'InPatient created successfully.');
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
        $EditInPatient = InPatient::find($id);    
        return view('backend/patient/edit-InPatient', compact('EditInPatient'));
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
            'out_p_name'    => 'required|string|max:50',
	    	'out_p_age'     => 'required|integer',
	    	'out_p_address' => 'required',
	    	'out_p_phone'   => 'required',
	    	'out_p_gender'     => 'required',
	    	'out_p_blood'   => 'required',                            
	    	'out_p_symptoms'   => 'string|max:200',                            
	    	'out_p_address'   => 'string|max:150',                            
        ]);

        // $info = array(
        //     'message' => "Holidays Class Added successfull",
        //     'alert-type' => 'success'
        // );

        $UpdateInPatient = InPatient::find($id);
        $UpdateInPatient->out_p_name = $request->out_p_name; 
        $UpdateInPatient->out_p_father_name = $request->out_p_father_name; 
        $UpdateInPatient->out_p_gender = $request->out_p_gender; 
        $UpdateInPatient->out_p_age = $request->out_p_age; 
        $UpdateInPatient->out_p_phone = $request->out_p_phone; 
        $UpdateInPatient->out_p_blood = $request->out_p_blood; 
        $UpdateInPatient->out_p_height = $request->out_p_height; 
        $UpdateInPatient->out_p_weight = $request->out_p_weight; 
        $UpdateInPatient->out_p_bp = $request->out_p_bp; 
        $UpdateInPatient->out_p_symptoms = $request->out_p_symptoms; 
        $UpdateInPatient->out_p_address = $request->out_p_address; 
        $UpdateInPatient->save();
        return redirect('admin/inpatient')->with('success', 'InPatient Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $DeleteInPatient = InPatient::find($id);
        $DeleteInPatient->delete();
        return redirect('admin/inpatient')->with('success', 'InPatient Delete successfully.');

    }
}
