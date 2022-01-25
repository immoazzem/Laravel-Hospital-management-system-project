<?php

namespace App\Http\Controllers\backend\medicine;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\MedicineCompany;

class MedicineCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $MedicineCompanys = MedicineCompany::all();
        return view('backend/medicine/medicinecompany/medicinecompany', compact('MedicineCompanys'));
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

        $MedicineCompany = new MedicineCompany;
        $MedicineCompany->name = $request->name; 
        $MedicineCompany->save();
        return redirect('/admin/medicinecompany')->with('success', 'MedicineCompany created successfully.');
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
        $EditMedicineCompany = MedicineCompany::find($id);
        return view('backend/medicine/medicinecompany/edit-medicinecompany', compact('EditMedicineCompany'));
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

        $UpdateMedicineCompany = MedicineCompany::find($id);
        $UpdateMedicineCompany->name = $request->name; 
        $UpdateMedicineCompany->save();
        return redirect('/admin/medicinecompany')->with('success', 'MedicineCompany Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $DeleteMedicineCompany = MedicineCompany::find($id);
        $DeleteMedicineCompany->delete();
        return redirect('/admin/medicinecompany')->with('success', 'MedicineCompany Delete successfully.');

    }
}
