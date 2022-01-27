<?php

namespace App\Http\Controllers\backend\appointment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\Appointment;
use App\Models\backend\OutPatient;
use App\Models\backend\Doctors;

class AppointmentController extends Controller
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

        $Appointments = Appointment::all();
        
        return view('backend/appointment/appointment', compact('Appointments', 'OutPatients','Doctors'));
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
        return view('backend/appointment/add-appointment', compact('OutPatients', 'Doctors'));
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
            'app_p_id'   => 'required',
    		'app_doc_id' => 'required',
    		'app_date'   => 'required',
    		'app_status' => 'required',                                           
        ]);
        // $info = array(
            //     'message' => "Holidays Class Added successfull",
            //     'alert-type' => 'success'
            // );
        
        $Appointment = new Appointment;
        $Appointment->app_p_id = $request->app_p_id; 
        $Patient = OutPatient::find($request->app_p_id);
        $Appointment->app_p_name = $Patient->out_p_name; 
        $Appointment->app_p_phone = $Patient->out_p_phone; 
        
        $Appointment->app_doc_id = $request->app_doc_id; 
        $Doctors = Doctors::find($request->app_doc_id);
        $Appointment->app_doc_name = $Doctors->doc_name; 

        $Appointment->app_date = $request->app_date; 
        $Appointment->app_message = $request->app_message; 
        $Appointment->app_status = $request->app_status;  
        $Appointment->save();
        return redirect('admin/appointment')->with('success', 'Appointment created successfully.');
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
        $Appointment = Appointment::find($id);    
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

        $UpdateAppointment = Appointment::find($id);
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
        return redirect('admin/appointment')->with('success', 'Appointment Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $DeleteAppointment = Appointment::find($id);
        $DeleteAppointment->delete();
        return redirect('admin/appointment')->with('success', 'Appointment Delete successfully.');

    }


    // public function patientdata ($id){

    //     $data = OutPatient::find($id);
    //     echo json_encode($data);

    // }
}
