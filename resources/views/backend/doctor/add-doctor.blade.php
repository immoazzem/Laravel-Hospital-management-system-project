@extends('backend/layouts/master')
@section('add-doctor')

    <div class="content">
        <div class="row">
            <div class="col-sm-5 col-5">
                <h4 class="page-title">Add Doctors</h4>
            </div>
            <div class="col-sm-7 col-7 text-right m-b-30">
                <a href="{{ route('doctor.index') }}" class="btn btn-primary btn-rounded"><i class="fa fa-show"></i>
                    Show Doctors</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card text-left">
                    <img class="card-img-top" src="holder.js/100px180/" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Doctors Add Form</h4>
                        <p class="card-text">
                        <form action="{{ route('doctor.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label>Name</label>
                                    <input class="form-control" name="doc_name" type="text" required>
                                    @error('doc_name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Phone</label>
                                    <input class="form-control" name="doc_phone" type="number" required>
                                    @error('doc_name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                   
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 ">
                                    <label>Specialist</label>
                                    <input class="form-control" name="doc_specialist" type="text" required>
                                    @error('doc_specialist')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror                                  
                                </div>
                                <div class="col-md-6">
                                    <label>Education</label>
                                    <input class="form-control" name="doc_education" type="text" required>
                                    @error('doc_education')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label>Email </label>
                                    <input class="form-control" name="doc_email" type="email" required>
                                    @error('doc_email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Password</label>
                                    <input class="form-control" name="doc_password" type="password" required>
                                    @error('doc_password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label>Gender</label>
                                    <div class="form-control">
                                        <input name="doc_gender" type="radio" value="male"> &nbsp; Male &nbsp;
                                        <input name="doc_gender" type="radio" value="female"> &nbsp; Female
                                    </div>
                                    @error('doc_gender')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Blood Group</label>
                                    <select name="doc_blood" id=""  class="form-control" required>
                                        <option value="" selected disabled>--Select Blood--</option>
                                        <option value="A+"> A+ </option>
			                            <option value="A-"> A- </option>
			                             <option value="B+"> B+ </option>
			                             <option value="B-"> B- </option>
			                             <option value="AB+"> AB+ </option>
			                             <option value="AB-"> AB- </option>
			                             <option value="O+"> O+ </option>
			                             <option value="O-"> O- </option>
                                    </select>                                  
                                    @error('doc_blood')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Department</label>
                                    <select  class="form-control" name="doc_dept_id" id="" required>
                                        <option value="" selected disabled>--Chose Department--</option>
                                        @foreach ($Departments as $Department)
                                            <option value="{{$Department->id}}">{{$Department->dept_name}}</option>                                        
                                        @endforeach
                                    </select>
                                    @error('doc_dept_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Image</label>
                                    <input class="form-control" name="doc_img" type="file" required>
                                    @error('doc_img')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Status</label>
                                    <div class="form-control">
                                        <input name="doc_status" type="radio" value="active"> &nbsp; Active &nbsp;
                                        <input name="doc_status" type="radio" value="inactive"> &nbsp; Inactive
                                    </div>
                                    @error('doc_status')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Address</label>
                                    <textarea  class="form-control" name="doc_address" id="" cols="30" rows="3" required></textarea>
                                    @error('doc_address')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="m-t-20 text-center">
                                <button type="submit" class="btn btn-primary submit-btn">Add Doctors</button>
                            </div>
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
