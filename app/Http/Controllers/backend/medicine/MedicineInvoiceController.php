<?php

namespace App\Http\Controllers\backend\medicine;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\MedicineInvoice;
use App\Models\backend\Medicine;

class MedicineInvoiceController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Medicines =  Medicine::all()->sortByDesc("created_at");
        $MedicineInvoice = MedicineInvoice::all();
        return view('backend/medicine/medicine/medicineinvoice', compact('MedicineInvoice', 'Medicines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Medicines =  Medicine::all();
        return view('backend/medicine/medicine/add-medicineinvoice', compact('Medicines'));
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
            'medicine_name' => 'required|string',                            
            'medicine_quantity' => 'required|integer',                            
            'medicine_price' => 'required|integer',                                                     
            'medicine_discount' => 'required',                                                     
            'medicine_total' => 'required',                                                     
        ]);

        // $info = array(
        //     'message' => "Holidays Class Added successfull",
        //     'alert-type' => 'success'
        // );

        $MedicineInvoice = new MedicineInvoice;
        $MedicineInvoice->medicine_name = $request->medicine_name; 
        $MedicineInvoice->medicine_quantity = $request->medicine_quantity; 
        $MedicineInvoice->medicine_price = $request->medicine_price; 
        $MedicineInvoice->medicine_discount = $request->medicine_discount; 
        $MedicineInvoice->medicine_total = $request->medicine_total; 

        $MedicineInvoice->save();
        return redirect('/admin/medicineinvoice')->with('success', 'MedicineInvoice created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Medicines =  Medicine::all();
        $ShowMedicineInvoice = MedicineInvoice::find($id);
        return view('backend/medicine/medicine/show-medicineinvoice', compact('ShowMedicineInvoice', 'Medicines'));



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Medicines =  Medicine::all();
        $EditMedicineInvoice = MedicineInvoice::find($id);    
        return view('backend/medicine/medicine/edit-medicineinvoice', compact('EditMedicineInvoice', 'Medicines'));
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
            'medicine_name' => 'required|string',                            
            'medicine_quantity' => 'required|integer',                            
            'medicine_price' => 'required|integer',                                                     
            'medicine_discount' => 'required',                                                     
            'medicine_total' => 'required',                                  
        ]);

        // $info = array(
        //     'message' => "Holidays Class Added successfull",
        //     'alert-type' => 'success'
        // );

        $UpdateMedicineInvoice = MedicineInvoice::find($id);
        $UpdateMedicineInvoice->medicine_name = $request->medicine_name; 
        $UpdateMedicineInvoice->medicine_quantity = $request->medicine_quantity; 
        $UpdateMedicineInvoice->medicine_price = $request->medicine_price; 
        $UpdateMedicineInvoice->medicine_discount = $request->medicine_discount; 
        $UpdateMedicineInvoice->medicine_total = $request->medicine_total; 

        $UpdateMedicineInvoice->save();
        return redirect('/admin/medicineinvoice')->with('success', 'MedicineInvoice Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $DeleteMedicineInvoice = MedicineInvoice::find($id);
        $DeleteMedicineInvoice->delete();
        return redirect('/admin/medicineinvoice')->with('success', 'MedicineInvoice Delete successfully.');

    }

  











}
