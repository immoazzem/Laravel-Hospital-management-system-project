<?php

namespace App\Http\Controllers\backend\asset;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\AssetCategory;
use App\Models\backend\Asset;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $AssetCategorys = AssetCategory::all();
        $Assets = Asset::all();
        return view('backend/asset/asset', compact('Assets', 'AssetCategorys'));
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
            'category' => 'required|string',
            'price' => 'required|string',
            'date_of_purchase' => 'required|date',
                          
        ]);

        // $info = array(
        //     'message' => "Holidays Class Added successfull",
        //     'alert-type' => 'success'
        // );

        $Asset = new Asset;
        $Asset->name = $request->name;       
        $Asset->category = $request->category;       
        $Asset->price = $request->price;       
        $Asset->date_of_purchase = $request->date_of_purchase;       
        $Asset->save();
        return redirect('admin/asset')->with('success', 'Asset created successfully.');
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
        $AssetCategorys = AssetCategory::all();
        $EditAsset = Asset::find($id);    
        return view('backend/asset/edit-asset', compact('EditAsset', 'AssetCategorys'));
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
            'category' => 'required|string',
            'price' => 'required|string',
            'date_of_purchase' => 'required|date',
                                               
        ]);

        // $info = array(
        //     'message' => "Holidays Class Added successfull",
        //     'alert-type' => 'success'
        // );

        $UpdateAsset = Asset::find($id);
        $UpdateAsset->name = $request->name;       
        $UpdateAsset->category = $request->category;       
        $UpdateAsset->price = $request->price;       
        $UpdateAsset->date_of_purchase = $request->date_of_purchase;    
       
        $UpdateAsset->update();
        return redirect('admin/asset')->with('success', 'Asset Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $DeleteAsset = Asset::find($id);
        $DeleteAsset->delete();
        return redirect('admin/asset')->with('success', 'Asset Delete successfully.');

    }
}
