<?php

namespace App\Http\Controllers\backend\blood;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\BloodGroup;

class BloodGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $BloodGroups = BloodGroup::all();
        return view('backend/blooddonor/bloodgroup', compact('BloodGroups'));
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
            'name' => 'required',
                          
        ]);
        // $info = array(
        //     'message' => "Holidays Class Added successfull",
        //     'alert-type' => 'success'
        // );

        $BloodGroup = new BloodGroup;
        $BloodGroup->name = $request->name; 
        
        $BloodGroup->save();
        return redirect('admin/blooddonor/bloodgroup')->with('success', 'BloodGroup created successfully.');
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
        $EditBloodGroup = BloodGroup::find($id);    
        return view('backend/blooddonor/edit-bloodgroup', compact('EditBloodGroup'));
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
            'name' => 'required',
                                               
        ]);

        // $info = array(
        //     'message' => "Holidays Class Added successfull",
        //     'alert-type' => 'success'
        // );

        $UpdateBloodGroup = BloodGroup::find($id);
        $UpdateBloodGroup->name = $request->name; 
       
        $UpdateBloodGroup->save();
        return redirect('admin/bloodgroup')->with('success', 'BloodGroup Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $DeleteBloodGroup = BloodGroup::find($id);
        $DeleteBloodGroup->delete();
        return redirect('admin/bloodgroup')->with('success', 'BloodGroup Delete successfully.');

    }
}
