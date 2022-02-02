<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\Medicine;
use App\Models\backend\InPatient;
use App\Models\backend\OutPatient;

class AllAjaxController extends Controller
{
    public function MediPrice($id)
    {

        //$Med_id = $request->MED_id;
        // return $id;
        $MEDICINE = Medicine::where('id', $id)->get();
        return json_encode($MEDICINE);
    }
    public function PatientASPrescription($id)
    {
        
        
        if ($id == 'inpatient') {
            $InPatient = InPatient::all();
            return json_encode($InPatient);
            
        } else if ($id == 'outpatient') {

            $OutPatient = OutPatient::all();
            return json_encode($OutPatient);
        }
    }
}
