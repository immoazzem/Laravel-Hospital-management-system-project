<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\Medicine;

class AllAjaxController extends Controller
{
    public function MediPrice($id){

        //$Med_id = $request->MED_id;
       // return $id;
        $MEDICINE = Medicine::where('id',$id)->get();
       return json_encode($MEDICINE);

    }


}
