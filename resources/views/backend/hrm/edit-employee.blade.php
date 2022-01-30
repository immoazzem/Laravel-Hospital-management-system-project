@extends('backend/layouts/master')
@section('content')

    <div class="content">
        <div class="row">
            <div class="col-sm-5 col-5">
                <h4 class="page-title">Employee Edit</h4>
            </div>
            <div class="col-sm-7 col-7 text-right m-b-30">
                <a href="{{ route('employee.index') }}" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i>
                    Show Asset </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card text-left">
                    <img class="card-img-top" src="holder.js/100px180/" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Employee  Edit Form</h4>
                        <p class="card-text">
                        <form action="{{ route('employee.update', $EditEmployee->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')                  
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input class="form-control" value="{{$EditEmployee->emp_name}}" name="emp_name" type="text" required>
                                        @error('emp_name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Employee Role</label>
                                        <select name="emp_role_id" id="" class="form-control" required>
                                            <option value="" selected disabled>--Select Blood--</option>
                                            @foreach ($EmployeeRoles as $EmployeeRole)
                                                <option value="{{ $EmployeeRole->id }}" @if($EmployeeRole->id == $EditEmployee->emp_role_id)? selected : '' @endIf>{{ $EmployeeRole->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('emp_role_id')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Phone <span class="text-danger">*</span></label>
                                        <input name="emp_phone" value="{{$EditEmployee->emp_phone}}"  class="form-control" type="number" required>
                                    </div>
                                    @error('emp_phone')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input name="emp_email" value="{{$EditEmployee->emp_email}}"  class="form-control" type="email" required>
                                    </div>
                                    @error('emp_email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input name="emp_password" value="{{$EditEmployee->emp_password}}"  class="form-control" type="password">
                                    </div>
                                    @error('emp_password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 ">
                                    <label>Gender</label>
                                    <div class="form-control">

                                        <input name="emp_sex" type="radio" value="male" @if($EditEmployee->emp_sex == 'male')? checked : '' @endIf> &nbsp; Male &nbsp;
                                        <input name="emp_sex" type="radio" value="female" @if($EditEmployee->emp_sex == 'female')? checked : '' @endIf> &nbsp; Female
                                    </div>
                                    @error('emp_sex')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Employee Address <span class="text-danger">*</span></label>
                                        <textarea name="emp_address" id="" class="form-control " cols="30"
                                            rows="3">{{$EditEmployee->emp_address}}</textarea>
                                    </div>
                                    @error('emp_address')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Joining Date <span class="text-danger">*</span></label>
                                        <div class="cal-icon">
                                            <input name="emp_joining_date" value="{{$EditEmployee->emp_joining_date}}"  class="form-control datetimepicker" type="date" required>
                                        </div>
                                    </div>
                                    @error('emp_joining_date')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <div class="form-control">
                                            <input name="emp_status" type="radio" value="active" @if($EditEmployee->emp_status == 'active')? checked : '' @endIf> &nbsp; Active &nbsp;
                                            <input name="emp_status" type="radio" value="inactive" @if($EditEmployee->emp_status == 'inactive')? checked : '' @endIf> &nbsp; Inactive
                                        </div>
                                        @error('emp_status')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-control">
                                            <label>Image</label>
                                            <input  name="emp_img" type="file">
                                            @error('emp_img')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Basic Salary</label>
                                        <input name="emp_s_basic" value="{{$EditEmployee->emp_s_basic}}"  class="form-control" type="number" required> 
                                    </div>
                                    @error('emp_s_basic')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>House Announce</label>
                                        <input name="emp_s_house" value="{{$EditEmployee->emp_s_house}}"  class="form-control" type="number">
                                    </div>
                                    @error('emp_s_house')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Medicle Announce</label>
                                        <input name="emp_s_medicale"  value="{{$EditEmployee->emp_s_medicale}}"  class="form-control" type="number">
                                    </div>
                                    @error('emp_s_medicale')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Convience</label>
                                        <input name="emp_s_convience" value="{{$EditEmployee->emp_s_convience}}"  class="form-control" type="number">
                                    </div>
                                    @error('emp_s_convience')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Bonous </label>
                                        <input name="emp_s_bonous" value="{{$EditEmployee->emp_s_bonous}}"  class="form-control" type="number">
                                    </div>
                                    @error('emp_s_bonous')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>                              
                            <div class="m-t-20 text-center">
                                <button type="submit" class="btn btn-primary submit-btn">Update Asset</button>
                            </div>
                        </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
