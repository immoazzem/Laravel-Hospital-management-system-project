<?php

namespace App\Http\Controllers\backend\blood;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\BloodDonor;

class BloodDonorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $BloodDonors = BloodDonor::all();
        return view('backend/blooddonor/blooddonor', compact('BloodDonors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend/blooddonor/add-blooddonor');
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
            'donor_name' => 'required',
    		'donor_blood' => 'required',
    		'donor_age' => 'required',
            'donor_sex' => 'required',
    		'donor_last_date' => 'required',
    		'donor_phone' => 'required',                          
    		'donor_email' => 'required|email|nullable',                          
        ]);
        // $info = array(
        //     'message' => "Holidays Class Added successfull",
        //     'alert-type' => 'success'
        // );

        $BloodDonor = new BloodDonor;
        $BloodDonor->donor_name = $request->donor_name; 
        $BloodDonor->donor_blood = $request->donor_blood; 
        $BloodDonor->donor_age = $request->donor_age; 
        $BloodDonor->donor_sex = $request->donor_sex; 
        $BloodDonor->donor_last_date = $request->donor_last_date; 
        $BloodDonor->donor_phone = $request->donor_phone; 
        $BloodDonor->donor_email = $request->donor_email; 
        $BloodDonor->save();
        return redirect('admin/blooddonor')->with('success', 'BloodDonor created successfully.');
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
        $EditBloodDonor = BloodDonor::find($id);    
        return view('backend/blooddonor/edit-blooddonor', compact('EditBloodDonor'));
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
            'donor_name' => 'required',
    		'donor_blood' => 'required',
    		'donor_age' => 'required',
            'donor_sex' => 'required',
    		'donor_last_date' => 'required',
    		'donor_phone' => 'required',                          
    		'donor_email' => 'required|email|nullable',                         
        ]);

        // $info = array(
        //     'message' => "Holidays Class Added successfull",
        //     'alert-type' => 'success'
        // );

        $UpdateBloodDonor = BloodDonor::find($id);
        $UpdateBloodDonor->donor_name = $request->donor_name; 
        $UpdateBloodDonor->donor_blood = $request->donor_blood; 
        $UpdateBloodDonor->donor_age = $request->donor_age; 
        $UpdateBloodDonor->donor_sex = $request->donor_sex; 
        $UpdateBloodDonor->donor_last_date = $request->donor_last_date; 
        $UpdateBloodDonor->donor_phone = $request->donor_phone; 
        $UpdateBloodDonor->donor_email = $request->donor_email; 
        $UpdateBloodDonor->save();
        return redirect('admin/blooddonor')->with('success', 'BloodDonor Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $DeleteBloodDonor = BloodDonor::find($id);
        $DeleteBloodDonor->delete();
        return redirect('admin/blooddonor')->with('success', 'BloodDonor Delete successfully.');

    }
}
