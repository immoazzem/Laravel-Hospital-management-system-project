<?php

namespace App\Http\Controllers\backend\doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\Doctors;
use App\Models\backend\DoctorSchedule;

class DoctorScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Doctors = Doctors::all();

        $DoctorSchedules = DoctorSchedule::all();
        return view('backend/doctor/doctorschedule', compact('DoctorSchedules', 'Doctors'));
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
            'doc_name'    => 'required|string|max:50',
            'date'    => 'required|date',
            'start_time'    => 'required',
            'end_time' => 'required',           
        ]);
        // $info = array(
        //     'message' => "Holidays Class Added successfull",
        //     'alert-type' => 'success'
        // );

        $DoctorSchedule = new DoctorSchedule;
        $DoctorSchedule->doc_name = $request->doc_name;
        $DoctorSchedule->date = $request->date;
        $DoctorSchedule->start_time = $request->start_time;
        $DoctorSchedule->end_time = $request->end_time;
        $DoctorSchedule->save();
        return redirect('admin/doctorschedule')->with('success', 'Doctors Schedule created successfully.');
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
        $EditDoctorSchedule = DoctorSchedule::find($id);
        $Doctors = Doctors::all();
        return view('backend/doctor/edit-doctorschedule', compact('EditDoctorSchedule', 'Doctors'));
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
            'date'    => 'required|date',
            'start_time'    => 'required',
            'end_time' => 'required',    
        ]);

        // $info = array(
        //     'message' => "Holidays Class Added successfull",
        //     'alert-type' => 'success'
        // );

        $UpdateDoctorSchedule = DoctorSchedule::find($id);
        $UpdateDoctorSchedule->doc_name = $request->doc_name;
        $UpdateDoctorSchedule->date = $request->date;
        $UpdateDoctorSchedule->start_time = $request->start_time;
        $UpdateDoctorSchedule->end_time = $request->end_time;
        $UpdateDoctorSchedule->update();
        return redirect('admin/doctorschedule')->with('success', 'Doctors Schedule Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $DeleteDoctorSchedule= DoctorSchedule::find($id);
        $DeleteDoctorSchedule->delete();
        return redirect('admin/doctorschedule')->with('success', 'Doctors Schedule Delete successfully.');
    }
}
