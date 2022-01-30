<?php

namespace App\Http\Controllers\backend\hrm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\Employee;
use App\Models\backend\EmployeeRole;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $EmployeeRoles = EmployeeRole::all();
        $Employees = Employee::all();
        return view('backend/hrm/employee', compact('Employees', 'EmployeeRoles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $EmployeeRoles = EmployeeRole::all();
        return view('backend/hrm/add-employee', compact('EmployeeRoles'));
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
        'emp_role_id'=>'required',
        'emp_name'=>'required',
        'emp_phone'=>'required',
        'emp_address'=>'required',
        'emp_sex'=>'required',
        'emp_email'=>'required',
        'emp_password'=>'required',
        'emp_joining_date'=>'required',
        'emp_s_basic'=>'required',
        'emp_img'=>'nullable|mimes:jpg,jpeg,png|max:2048'
    
                          
         ]);

        // $info = array(
        //     'message' => "Holidays Class Added successfull",
        //     'alert-type' => 'success'
        // );
        $Employee = new Employee;
        $Employee->emp_role_id = $request->emp_role_id;       
        $Employee->emp_name = $request->emp_name;       
        $Employee->emp_phone = $request->emp_phone;       
        $Employee->emp_address = $request->emp_address;       
        $Employee->emp_sex = $request->emp_sex;       
        $Employee->emp_email = $request->emp_email;       
        $Employee->emp_password = $request->emp_password;       
        $Employee->emp_joining_date = $request->emp_joining_date;       
        $Employee->emp_status = $request->emp_status;       
        $Employee->emp_s_basic = $request->emp_s_basic;       
        $Employee->emp_s_house = $request->emp_s_house;       
        $Employee->emp_s_medicale = $request->emp_s_medicale;       
        $Employee->emp_s_convience = $request->emp_s_convience;       
        $Employee->emp_s_bonous = $request->emp_s_bonous;  
        
    

        if ($request->file('emp_img')) {
            $photoname = $request->file('emp_img')->getClientOriginalName();
           // dd($photoname);
            $request->emp_img->storeAs('public/images/employee', $photoname);
            $Employee->emp_img = $photoname; 
           }     
        $Employee->save();
        return redirect('admin/employee')->with('success', 'Employee created successfully.');
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
        $EmployeeRoles = EmployeeRole::all();
        $EditEmployee = Employee::find($id);    
        return view('backend/hrm/edit-employee', compact('EditEmployee', 'EmployeeRoles'));
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
            'emp_role_id'=>'required',
            'emp_name'=>'required',
            'emp_phone'=>'required',
            'emp_address'=>'required',
            'emp_sex'=>'required',
            'emp_email'=>'required',
            'emp_password'=>'required',
            'emp_joining_date'=>'required',
            'emp_s_basic'=>'required',
            'emp_img'=>'nullable|mimes:jpg,jpeg,png|max:2048'
                                               
        ]);

        // $info = array(
        //     'message' => "Holidays Class Added successfull",
        //     'alert-type' => 'success'
        // );

        $UpdateEmployee = Employee::find($id);
        $UpdateEmployee->emp_role_id = $request->emp_role_id;       
        $UpdateEmployee->emp_name = $request->emp_name;       
        $UpdateEmployee->emp_phone = $request->emp_phone;       
        $UpdateEmployee->emp_address = $request->emp_address;       
        $UpdateEmployee->emp_sex = $request->emp_sex;       
        $UpdateEmployee->emp_email = $request->emp_email;       
        $UpdateEmployee->emp_password = $request->emp_password;       
        $UpdateEmployee->emp_joining_date = $request->emp_joining_date;       
        $UpdateEmployee->emp_status = $request->emp_status;       
        $UpdateEmployee->emp_s_basic = $request->emp_s_basic;       
        $UpdateEmployee->emp_s_house = $request->emp_s_house;       
        $UpdateEmployee->emp_s_medicale = $request->emp_s_medicale;       
        $UpdateEmployee->emp_s_convience = $request->emp_s_convience;       
        $UpdateEmployee->emp_s_bonous = $request->emp_s_bonous;  
        
        if ($request->file('emp_img')) {

            
            if($UpdateEmployee->emp_img){
                $path = storage_path().'app/public/images/employee';
                $file_old = $path . $UpdateEmployee->emp_img;
                unlink($file_old);
            }
            $photoname = $request->file('emp_img')->getClientOriginalName();
            $request->emp_img->storeAs('public/images/employee', $photoname);
            $UpdateEmployee->emp_img = $photoname; 
           }
       
        $UpdateEmployee->save();
        return redirect('admin/employee')->with('success', 'Employee Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $DeleteEmployee = Employee::find($id);
        $DeleteEmployee->delete();
        return redirect('admin/employee')->with('success', 'Employee Delete successfully.');

    }
}
