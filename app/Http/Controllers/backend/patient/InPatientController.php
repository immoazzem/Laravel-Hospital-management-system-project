<?php

namespace App\Http\Controllers\backend\patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\InPatient;
use App\Models\backend\BloodGroup;
use App\Models\backend\Doctors;
use App\Models\backend\BedCategory;
use App\Models\backend\Bed;

class InPatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Doctors = Doctors::all();
        $BedCategorys = BedCategory::all();
        $Beds = Bed::all();
        $InPatients = InPatient::all();
        return view('backend/patient/inpatient', compact('InPatients', 'Beds', 'Doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $BloodGroups = BloodGroup::all();
        $Doctors = Doctors::all();
        $BedCategorys = BedCategory::all();
        $Beds = Bed::all();
        return view('backend/patient/add-inpatient', compact('BloodGroups', 'Doctors', 'BedCategorys', 'Beds'));
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
            'in_p_bed_id'         => 'required',                         
            'in_p_bed_status'         => 'required'                           
        ]);
        $InPatient = new InPatient;
        $InPatient->in_p_name = $request->in_p_name; 
        $InPatient->in_p_sex = $request->in_p_sex; 
        $InPatient->in_p_age = $request->in_p_age; 
        $InPatient->in_p_phone = $request->in_p_phone; 
        $InPatient->in_p_guardian_name = $request->in_p_guardian_name; 
        $InPatient->in_p_guardian_phone = $request->in_p_guardian_phone; 
        $InPatient->in_p_blood = $request->in_p_blood; 
        $InPatient->in_p_height = $request->in_p_height; 
        $InPatient->in_p_weight = $request->in_p_weight; 
        $InPatient->in_p_bed_status = $request->in_p_bed_status; 
        $InPatient->in_p_bp = $request->in_p_bp; 
        $InPatient->in_p_symptoms = $request->in_p_symptoms; 
        $InPatient->in_p_address = $request->in_p_address; 
        $InPatient->in_p_admission_date = $request->in_p_admission_date; 
        $InPatient->in_p_case = $request->in_p_case; 
        $InPatient->in_p_casualty = $request->in_p_casualty; 
        $InPatient->in_p_old_patient = $request->in_p_old_patient; 
        $InPatient->in_p_reference = $request->in_p_reference; 
        $InPatient->in_p_doc_id = $request->in_p_doc_id; 
        $InPatient->in_p_bed_category_id = $request->in_p_bed_category_id; 
        $InPatient->in_p_bed_id = $request->in_p_bed_id; 
        $InPatient->in_p_note = $request->in_p_note; 
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
        $BloodGroups = BloodGroup::all();
        $Doctors = Doctors::all();
        $BedCategorys = BedCategory::all();
        $Beds = Bed::all();
        $EditInPatient = InPatient::find($id);    
        return view('backend/patient/edit-inpatient', compact( 'EditInPatient', 'BloodGroups', 'Doctors', 'BedCategorys', 'Beds'));
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
            'in_p_bed_id'         => 'required',                         
            'in_p_bed_status'         => 'required'                          
        ]);

        // $info = array(
        //     'message' => "Holidays Class Added successfull",
        //     'alert-type' => 'success'
        // );

        $UpdateInPatient = InPatient::find($id);
        $UpdateInPatient->in_p_name = $request->in_p_name; 
        $UpdateInPatient->in_p_sex = $request->in_p_sex; 
        $UpdateInPatient->in_p_age = $request->in_p_age; 
        $UpdateInPatient->in_p_phone = $request->in_p_phone; 
        $UpdateInPatient->in_p_guardian_name = $request->in_p_guardian_name; 
        $UpdateInPatient->in_p_guardian_phone = $request->in_p_guardian_phone; 
        $UpdateInPatient->in_p_blood = $request->in_p_blood; 
        $UpdateInPatient->in_p_height = $request->in_p_height; 
        $UpdateInPatient->in_p_weight = $request->in_p_weight; 
        $UpdateInPatient->in_p_bed_status = $request->in_p_bed_status; 
        $UpdateInPatient->in_p_bp = $request->in_p_bp; 
        $UpdateInPatient->in_p_symptoms = $request->in_p_symptoms; 
        $UpdateInPatient->in_p_address = $request->in_p_address; 
        $UpdateInPatient->in_p_admission_date = $request->in_p_admission_date; 
        $UpdateInPatient->in_p_case = $request->in_p_case; 
        $UpdateInPatient->in_p_casualty = $request->in_p_casualty; 
        $UpdateInPatient->in_p_old_patient = $request->in_p_old_patient; 
        $UpdateInPatient->in_p_reference = $request->in_p_reference; 
        $UpdateInPatient->in_p_doc_id = $request->in_p_doc_id; 
        $UpdateInPatient->in_p_bed_category_id = $request->in_p_bed_category_id; 
        $UpdateInPatient->in_p_bed_id = $request->in_p_bed_id; 
        $UpdateInPatient->in_p_note = $request->in_p_note; 
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
