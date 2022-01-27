<?php

namespace App\Http\Controllers\backend\doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\OutPatient;
use App\Models\backend\Doctors;
use App\Models\backend\Prescription;
use App\Models\backend\Medicine;

class PrescriptionController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $OutPatients = OutPatient::all();
        $Doctors = Doctors::all();
        $Prescriptions = Prescription::all();
        
        return view('backend/prescription/prescription', compact('Prescriptions', 'OutPatients','Doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    
    {
        $OutPatients = OutPatient::all();
        $Doctors = Doctors::all();
        $Medicines = Medicine::all();
        return view('backend/prescription/add-prescription', compact('OutPatients', 'Doctors', 'Medicines'));
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
          'prescription_date' => 'required',
          'patient' => 'required',
          'doctor' => 'required',                                          
        ]);
        // $info = array(
            //     'message' => "Holidays Class Added successfull",
            //     'alert-type' => 'success'
            // );
            ['prescription_code','prescription_p_id','prescription_doc_id', 'prescription_history','prescription_note','prescription_date'];
        
        $Prescriptions = new Prescription;
        $Prescriptions->prescription_p_id = $request->prescription_p_id; 
        $Prescriptions->prescription_doc_id = $request->prescription_doc_id; 
        $Prescriptions->prescription_history = $request->prescription_history; 
        $Prescriptions->prescription_note = $request->prescription_note; 
        $Prescriptions->prescription_date = $request->prescription_date; 


        $Patient = OutPatient::find($request->app_p_id);
        $Prescriptions->app_p_name = $Patient->out_p_name; 
        $Prescriptions->app_p_phone = $Patient->out_p_phone; 
        
        $Prescriptions->app_doc_id = $request->app_doc_id; 
        $Doctors = Doctors::find($request->app_doc_id);
        $Prescriptions->app_doc_name = $Doctors->doc_name; 

        $Prescriptions->app_date = $request->app_date; 
        $Prescriptions->app_message = $request->app_message; 
        $Prescriptions->app_status = $request->app_status;  
        $Prescriptions->save();
        return redirect('admin/appointment')->with('success', 'Prescriptions created successfully.');
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
        $OutPatients = OutPatient::all();
        $Doctors = Doctors::all();
        $Appointment = Prescription::find($id);    
        return view('backend/appointment/edit-appointment', compact('Appointment', 'OutPatients', 'Doctors'));
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
            'app_p_id'   => 'required',
    		'app_doc_id' => 'required',
    		'app_date'   => 'required',
    		'app_status' => 'required',                                                
        ]);

        // $info = array(
        //     'message' => "Holidays Class Added successfull",
        //     'alert-type' => 'success'
        // );

        $UpdateAppointment = Prescription::find($id);
        $UpdateAppointment->app_p_id = $request->app_p_id; 
        $Patient = OutPatient::find($request->app_p_id);
        $UpdateAppointment->app_p_name = $Patient->out_p_name; 
        $UpdateAppointment->app_p_phone = $Patient->out_p_phone; 
        
        $UpdateAppointment->app_doc_id = $request->app_doc_id; 
        $Doctors = Doctors::find($request->app_doc_id);
        $UpdateAppointment->app_doc_name = $Doctors->doc_name; 

        $UpdateAppointment->app_date = $request->app_date; 
        $UpdateAppointment->app_message = $request->app_message; 
        $UpdateAppointment->app_status = $request->app_status;  
        $UpdateAppointment->update();
        return redirect('admin/appointment')->with('success', 'Prescriptions Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $DeletePrescriptions = Prescription::find($id);
        $DeletePrescriptions->delete();
        return redirect('admin/appointment')->with('success', 'Prescriptions Delete successfully.');

    }


    // public function patientdata ($id){

    //     $data = OutPatient::find($id);
    //     echo json_encode($data);

    // }
}
