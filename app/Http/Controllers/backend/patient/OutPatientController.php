<?php

namespace App\Http\Controllers\backend\patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\OutPatient;
use Illuminate\Support\Facades\DB;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class OutPatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $OutPatients = OutPatient::all();
        return view('backend/patient/outpatient', compact('OutPatients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend/patient/add-outpatient');
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

       // $id = IdGenerator::generate(['table' => 'out_patients', 'field'=>'out_p_id', 'length' => 8, 'prefix' =>'OUT-PET-']);

        $last = 1;
        $last = DB::table('out_patients')->latest()->first();
       
        $OutPatient = new OutPatient;
        $OutPatient->out_p_name = $request->out_p_name; 
        $OutPatient->out_p_father_name = $request->out_p_father_name; 
        $OutPatient->out_p_gender = $request->out_p_gender; 
        $OutPatient->out_p_age = $request->out_p_age; 
        $OutPatient->out_p_phone = $request->out_p_phone; 
        $OutPatient->out_p_blood = $request->out_p_blood; 
        $OutPatient->out_p_height = $request->out_p_height; 
        $OutPatient->out_p_weight = $request->out_p_weight; 
        $OutPatient->out_p_bp = $request->out_p_bp; 
        $OutPatient->out_p_symptoms = $request->out_p_symptoms; 
        $OutPatient->out_p_address = $request->out_p_address; 
        $OutPatient->save();
        return redirect('admin/outpatient')->with('success', 'OutPatient created successfully.');
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
        $EditOutPatient = OutPatient::find($id);    
        return view('backend/patient/edit-outpatient', compact('EditOutPatient'));
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

        $UpdateOutPatient = OutPatient::find($id);
        $UpdateOutPatient->out_p_name = $request->out_p_name; 
        $UpdateOutPatient->out_p_father_name = $request->out_p_father_name; 
        $UpdateOutPatient->out_p_gender = $request->out_p_gender; 
        $UpdateOutPatient->out_p_age = $request->out_p_age; 
        $UpdateOutPatient->out_p_phone = $request->out_p_phone; 
        $UpdateOutPatient->out_p_blood = $request->out_p_blood; 
        $UpdateOutPatient->out_p_height = $request->out_p_height; 
        $UpdateOutPatient->out_p_weight = $request->out_p_weight; 
        $UpdateOutPatient->out_p_bp = $request->out_p_bp; 
        $UpdateOutPatient->out_p_symptoms = $request->out_p_symptoms; 
        $UpdateOutPatient->out_p_address = $request->out_p_address; 
        $UpdateOutPatient->save();
        return redirect('admin/outpatient')->with('success', 'OutPatient Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $DeleteOutPatient = OutPatient::find($id);
        $DeleteOutPatient->delete();
        return redirect('admin/outpatient')->with('success', 'OutPatient Delete successfully.');

    }
}
