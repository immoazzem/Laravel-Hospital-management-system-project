<?php

namespace App\Http\Controllers\backend\asset;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\AssetCategory;

class AssetCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $AssetCategorys = AssetCategory::all();
        return view('backend/asset/assetcategory', compact('AssetCategorys'));
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

        $AssetCategory = new AssetCategory;
        $AssetCategory->name = $request->name;       
        $AssetCategory->save();
        return redirect('admin/assetcategory')->with('success', 'AssetCategory created successfully.');
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
        $EditAssetCategory = AssetCategory::find($id);    
        return view('backend/asset/edit-assetcategory', compact('EditAssetCategory'));
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

        $UpdateAssetCategory = AssetCategory::find($id);
        $UpdateAssetCategory->name = $request->name; 
       
        $UpdateAssetCategory->update();
        return redirect('admin/assetcategory')->with('success', 'AssetCategory Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $DeleteAssetCategory = AssetCategory::find($id);
        $DeleteAssetCategory->delete();
        return redirect('admin/assetcategory')->with('success', 'AssetCategory Delete successfully.');

    }
}
