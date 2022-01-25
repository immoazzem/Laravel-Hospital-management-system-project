<?php

namespace App\Http\Controllers\backend\medicine;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\MedicineGroup;

class MedicineGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicinegroups = MedicineGroup::all();
        return view('backend/medicine/medicinegroup/medicinegroup', compact('medicinegroups'));
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
            'name' => 'required|string|max:100',                            
        ]);

        // $info = array(
        //     'message' => "Holidays Class Added successfull",
        //     'alert-type' => 'success'
        // );

        $MedicineGroup = new MedicineGroup;
        $MedicineGroup->name = $request->name; 
        $MedicineGroup->save();
        return redirect('/admin/medicinegroup')->with('success', 'MedicineGroup created successfully.');
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
        $EditMedicineGroup = MedicineGroup::find($id);
        return view('backend/medicine/medicinegroup/edit-medicinegroup', compact('EditMedicineGroup'));
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
            'name' => 'required|string|max:100',           
                    
        ]);

        // $info = array(
        //     'message' => "Holidays Class Added successfull",
        //     'alert-type' => 'success'
        // );

        $UpdateMedicineGroup = MedicineGroup::find($id);
        $UpdateMedicineGroup->name = $request->name; 
        $UpdateMedicineGroup->save();
        return redirect('/admin/medicinegroup')->with('success', 'MedicineGroup Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $DeleteMedicineGroup = MedicineGroup::find($id);
        $DeleteMedicineGroup->delete();
        return redirect('/admin/medicinegroup')->with('success', 'MedicineGroup Delete successfully.');

    }
}
