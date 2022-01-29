<?php

namespace App\Http\Controllers\backend\blood;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\BloodBank;
use App\Models\backend\BloodGroup;

class BloodBankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $BloodGroups = BloodGroup::all(); 
        $BloodBanks = BloodBank::all();
        return view('backend/blooddonor/bloodbank', compact('BloodBanks', 'BloodGroups'));
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
            'blood_bag_name' => 'required',
            'blood_bag_quantity' => 'required',
                          
        ]);
        // $info = array(
        //     'message' => "Holidays Class Added successfull",
        //     'alert-type' => 'success'
        // );

        $BloodBank = new BloodBank;
        $BloodBank->blood_bag_name = $request->blood_bag_name;       
        $BloodBank->blood_bag_quantity = $request->blood_bag_quantity;       
        $BloodBank->save();
        return redirect('admin/bloodbank')->with('success', 'BloodBank created successfully.');
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
        $EditBloodBank = BloodBank::find($id);    
        return view('backend/blooddonor/edit-bloodbank', compact('EditBloodBank', 'BloodGroups'));
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
            'blood_bag_name' => 'required',
            'blood_bag_quantity' => 'required',
                                               
        ]);

        // $info = array(
        //     'message' => "Holidays Class Added successfull",
        //     'alert-type' => 'success'
        // );

        $UpdateBloodBank = BloodBank::find($id);
        $UpdateBloodBank->blood_bag_name = $request->blood_bag_name;       
        $UpdateBloodBank->blood_bag_quantity = $request->blood_bag_quantity;   
        $UpdateBloodBank->save();
        return redirect('admin/bloodbank')->with('success', 'BloodBank Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $DeleteBloodBank = BloodBank::find($id);
        $DeleteBloodBank->delete();
        return redirect('admin/bloodbank')->with('success', 'BloodBank Delete successfully.');

    }
}
