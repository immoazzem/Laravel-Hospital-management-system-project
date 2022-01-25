<?php

namespace App\Http\Controllers\backend\patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\OutPatient;
use Illuminate\Support\Facades\DB;

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


           $now =  now();
           $Year = "deert";

        $last = DB::table('out_patients')->latest()->first();
        if($last == NULL){
            $last = 1;
        }
        $OutPatient = new OutPatient;
        $OutPatient->out_p_id = 'OUTPAT'. '-' . $last++ ; 
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
        return redirect('admin/outpatient')->with('success', 'Medicine created successfully.');
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
        $EditMedicine = OutPatient::find($id);    
        return view('backend/medicine/medicine/edit-medicine', compact('EditMedicine'));
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
            'price' => 'required|integer',                            
            'mg' => 'required|integer',                            
            'group' => 'required',                            
            'company' => 'required',                             
        ]);

        // $info = array(
        //     'message' => "Holidays Class Added successfull",
        //     'alert-type' => 'success'
        // );

        $UpdateMedicine = OutPatient::find($id);
        $UpdateMedicine->name =  $request->name; 
        $UpdateMedicine->price = $request->price; 
        $UpdateMedicine->mg = $request->mg; 
        $UpdateMedicine->group = $request->group; 
        $UpdateMedicine->company = $request->company; 
        $UpdateMedicine->save();
        return redirect('admin/outpatient')->with('success', 'Medicine Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $DeleteMedicine = OutPatient::find($id);
        $DeleteMedicine->delete();
        return redirect('admin/outpatient')->with('success', 'Medicine Delete successfully.');

    }
}
