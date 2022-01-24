<?php

namespace App\Http\Controllers\backend\setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\Bed;
use App\Models\backend\Floor;
use App\Models\backend\BedCategory;

class BedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Floors = Floor::all();
        $BedCATs =  BedCategory::all();
        $beds = Bed::all();
        return view('backend/setup/bed/bed', compact('beds', 'Floors', 'BedCATs'));
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
            'bed_no' => 'required|string',                            
            'price' => 'required|integer',                            
            'floor' => 'required',                            
            'bed_cat' => 'required',                            
        ]);

        // $info = array(
        //     'message' => "Holidays Class Added successfull",
        //     'alert-type' => 'success'
        // );

        $Bed = new Bed;
        $Bed->bed_no = $request->floor . '-' . $request->bed_cat . '-' . $request->bed_no; 
        $Bed->floor = $request->floor; 
        $Bed->bed_cat = $request->bed_cat; 
        $Bed->price = $request->price; 
        $Bed->save();
        return redirect('/admin/bed')->with('success', 'Bed created successfully.');
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
        $Floors = Floor::all();
        $BedCATs =  BedCategory::all();
        $Editbed = Bed::find($id);
        $BedNo = last(explode('-', $Editbed->bed_no));
        
        return view('backend/setup/bed/edit-bed', compact('Editbed', 'Floors', 'BedCATs', 'BedNo'));
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
            'bed_no' => 'required|integer',                            
            'price' => 'required|integer',                            
        ]);

        // $info = array(
        //     'message' => "Holidays Class Added successfull",
        //     'alert-type' => 'success'
        // );

        $Updatebed = Bed::find($id);
        $Updatebed->bed_no = $request->floor . '-' . $request->bed_cat . '-' . $request->bed_no; 
        $Updatebed->floor = $request->floor; 
        $Updatebed->bed_cat = $request->bed_cat; 
        $Updatebed->price = $request->price; 
        $Updatebed->save();
        return redirect('/admin/bed')->with('success', 'Bed Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Deletebed = Bed::find($id);
        $Deletebed->delete();
        return redirect('/admin/bed')->with('success', 'Bed Delete successfully.');

    }
}
