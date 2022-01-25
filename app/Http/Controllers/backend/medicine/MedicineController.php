<?php

namespace App\Http\Controllers\backend\medicine;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\Medicine;
use App\Models\backend\MedicineCompany;
use App\Models\backend\MedicineGroup;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $MedicineCompanys = MedicineCompany::all();
        $MedicineGroups =  MedicineGroup::all();
        $Medicines = Medicine::all();
        return view('backend/medicine/medicine/medicine', compact('Medicines', 'MedicineCompanys', 'MedicineGroups'));
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

        $Medicine = new Medicine;
        $Medicine->name = $request->name; 
        $Medicine->price = $request->price; 
        $Medicine->mg = $request->mg; 
        $Medicine->group = $request->group; 
        $Medicine->company = $request->company; 
        $Medicine->save();
        return redirect('/admin/medicine')->with('success', 'Medicine created successfully.');
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
        $MedicineCompanys = MedicineCompany::all();
        $MedicineGroups =  MedicineGroup::all();
        $EditMedicine = Medicine::find($id);    
        return view('backend/medicine/medicine/edit-medicine', compact('EditMedicine', 'MedicineCompanys', 'MedicineGroups'));
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

        $UpdateMedicine = Medicine::find($id);
        $UpdateMedicine->name =  $request->name; 
        $UpdateMedicine->price = $request->price; 
        $UpdateMedicine->mg = $request->mg; 
        $UpdateMedicine->group = $request->group; 
        $UpdateMedicine->company = $request->company; 
        $UpdateMedicine->save();
        return redirect('/admin/medicine')->with('success', 'Medicine Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $DeleteMedicine = Medicine::find($id);
        $DeleteMedicine->delete();
        return redirect('/admin/medicine')->with('success', 'Medicine Delete successfully.');

    }
}
