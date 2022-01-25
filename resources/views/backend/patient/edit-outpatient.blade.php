@extends('backend/layouts/master')
@section('edit-outpatient')

    <div class="content">
        <div class="row">
            <div class="col-sm-5 col-5">
                <h4 class="page-title">Edit Out Patient</h4>
            </div>
            <div class="col-sm-7 col-7 text-right m-b-30">
                <a href="{{ route('outpatient.index') }}" class="btn btn-primary btn-rounded"><i class="fa fa-show"></i>
                    Show Out Patient</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card text-left">
                    <img class="card-img-top" src="holder.js/100px180/" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Out Patient Edit Form</h4>
                        <p class="card-text">
                        <form action="{{ route('outpatient.update', $EditOutPatient->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label>Name</label>
                                    <input class="form-control" value="{{$EditOutPatient->out_p_name}}" name="out_p_name" type="text" required>
                                    @error('out_p_name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Father Name</label>
                                    <input class="form-control" value="{{$EditOutPatient->out_p_father_name}}" name="out_p_father_name" type="text" required>
                                    @error('out_p_father_name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 ">
                                    <label>Gender</label>
                                    <div class="form-control">

                                        <input name="out_p_gender" type="radio" value="male" @if($EditOutPatient->out_p_gender == 'male')? Checked : '' @endIf> &nbsp; Male &nbsp;
                                        <input name="out_p_gender" type="radio" value="female" @if($EditOutPatient->out_p_gender == 'female')? checked : '' @endIf> &nbsp; Female
                                    </div>
                                    @error('out_p_gender')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Age</label>
                                    <input class="form-control" value="{{$EditOutPatient->out_p_age}}" name="out_p_age" type="number" required>
                                    @error('out_p_age')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label>Phone</label>
                                    <input class="form-control" value="{{$EditOutPatient->out_p_phone}}" name="out_p_phone" type="number" required>
                                    @error('out_p_name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Blood Group</label>
                                    <select name="out_p_blood" id=""  class="form-control" required>
                                        <option value="" selected disabled>--Select Blood--</option>
                                        <option value="A+" @if($EditOutPatient->out_p_blood == 'A+')? selected : '' @endIf> A+ </option>
			                            <option value="A-" @if($EditOutPatient->out_p_blood == 'A-')? selected : '' @endIf> A- </option>
			                             <option value="B+" @if($EditOutPatient->out_p_blood == 'B+')? selected : '' @endIf> B+ </option>
			                             <option value="B-" @if($EditOutPatient->out_p_blood == 'B-')? selected : '' @endIf> B- </option>
			                             <option value="AB+" @if($EditOutPatient->out_p_blood == 'AB+')? selected : '' @endIf> AB+ </option>
			                             <option value="AB-" @if($EditOutPatient->out_p_blood == 'AB-')? selected : '' @endIf> AB- </option>
			                             <option value="O+" @if($EditOutPatient->out_p_blood == 'O+')? selected : '' @endIf> O+ </option>
			                             <option value="O-" @if($EditOutPatient->out_p_blood == 'O-')? selected : '' @endIf> O- </option>
                                    </select>                                  
                                    @error('out_p_blood')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label>Height(Cm) </label>
                                    <input class="form-control" value="{{$EditOutPatient->out_p_height}}" name="out_p_height" type="number" required>
                                    @error('out_p_height')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Weight(kg)</label>
                                    <input class="form-control" value="{{$EditOutPatient->out_p_weight}}" name="out_p_weight" type="number" required>
                                    @error('out_p_weight')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label>BP</label>
                                    <input class="form-control" value="{{$EditOutPatient->out_p_bp}}" name="out_p_bp" type="text" required>
                                    @error('out_p_bp')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Symtomps</label>
                                    <textarea  class="form-control"  name="out_p_symptoms" id="" cols="30" rows="3" required>{{$EditOutPatient->out_p_symptoms}}</textarea>
                                    @error('out_p_symptoms')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Address</label>
                                    <textarea  class="form-control" name="out_p_address" id="" cols="30" rows="3" required>{{$EditOutPatient->out_p_address}}</textarea>
                                    @error('out_p_address')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>                                 
                            <div class="m-t-20 text-center">
                                <button type="submit" class="btn btn-primary submit-btn">Update Out Patient</button>
                            </div>
                        </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
