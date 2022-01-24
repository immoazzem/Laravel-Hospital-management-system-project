<?php

namespace App\Http\Controllers\backend\setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\BedCategory;

class BedCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bedcategorys = BedCategory::all();
        return view('backend/setup/bedcategory/bedcategory', compact('bedcategorys'));
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
            'name' => 'required|string|max:20',                            
        ]);

        // $info = array(
        //     'message' => "Holidays Class Added successfull",
        //     'alert-type' => 'success'
        // );

        $bedcategorys = new BedCategory;
        $bedcategorys->name = $request->name; 
        $bedcategorys->save();
        return redirect('/admin/bedcategory')->with('success', 'Bedcategory created successfully.');
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
        $Editbedcategory = BedCategory::find($id);
        return view('backend/setup/bedcategory/edit-bedcategory', compact('Editbedcategory'));
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
            'name' => 'required|string|max:20',           
                    
        ]);

        // $info = array(
        //     'message' => "Holidays Class Added successfull",
        //     'alert-type' => 'success'
        // );

        $Updatebedcategory = BedCategory::find($id);
        $Updatebedcategory->name = $request->name; 
        $Updatebedcategory->save();
        return redirect('/admin/bedcategory')->with('success', 'Bedcategory Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Deletebedcategory = BedCategory::find($id);
        $Deletebedcategory->delete();
        return redirect('/admin/bedcategory')->with('success', 'Bedcategory Delete successfully.');

    }
}
