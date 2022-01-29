@extends('backend/layouts/master')
@section('content')

    <div class="content">
        <div class="row">
            <div class="col-sm-5 col-5">
                <h4 class="page-title">Edit Blood Donor</h4>
            </div>
            <div class="col-sm-7 col-7 text-right m-b-30">
                <a href="{{ route('blooddonor.index') }}" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i>
                    Show Department</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card text-left">
                    <img class="card-img-top" src="holder.js/100px180/" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Blood Donor Add Form</h4>
                        <p class="card-text">
                        <form action="{{ route('blooddonor.store') }}" method="post">
                            @csrf
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label>Name</label>
                                    <input class="form-control" name="donor_name" type="text" required>
                                    @error('donor_name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 ">
                                    <label>Gender</label>
                                    <div class="form-control">

                                        <input name="donor_sex" type="radio" value="male"> &nbsp; Male &nbsp;
                                        <input name="donor_sex" type="radio" value="female"> &nbsp; Female
                                    </div>
                                    @error('donor_sex')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                               
                            </div>
                            <div class="form-group row">
                                
                                <div class="col-md-6">
                                    <label>Age</label>
                                    <input class="form-control" name="donor_age" type="number" required>
                                    @error('donor_age')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Blood Group</label>
                                    <select name="donor_blood" id=""  class="form-control" required>
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
                                    @error('donor_blood')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label>Phone</label>
                                    <input class="form-control" name="donor_phone" type="number" required>
                                    @error('donor_phone')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Last Date Of Donate Blood</label>
                                    <input class="form-control" name="donor_last_date" type="date" required>
                                    @error('donor_last_date')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label>Email</label>
                                    <input class="form-control" name="donor_email" type="email">
                                    @error('donor_email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                            </div>                                            
                            <div class="m-t-20 text-center">
                                <button type="submit" class="btn btn-primary submit-btn">Update Blood Donor</button>
                            </div>
                        </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
