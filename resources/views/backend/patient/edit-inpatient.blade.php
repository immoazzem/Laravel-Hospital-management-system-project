@extends('backend/layouts/master')
@section('edit-inpatient')

    <div class="content">
        <div class="row">
            <div class="col-sm-5 col-5">
                <h4 class="page-title">Edit In-patient</h4>
            </div>
            <div class="col-sm-7 col-7 text-right m-b-30">
                <a href="{{ route('inpatient.create') }}" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i>
                    Show In-patient</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card text-left">
                    <img class="card-img-top" src="holder.js/100px180/" alt="">
                    <div class="card-body">
                        <h4 class="card-title">In-patient Edit Form</h4>
                        <p class="card-text">
                        <form action="{{ route('inpatient.update', $EditInPatient->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label>Patient Name</label>
                                    <input type="text" value="{{$EditInPatient->in_p_name}}" class="form-control" id="in_p_name" name="in_p_name"/>
                                    @error('in_p_name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Guardian Name</label>
                                    <input value="{{$EditInPatient->in_p_guardian_name}}"  type="text" class="form-control" id="in_p_guardian_name"
                                        name="in_p_guardian_name"/>
                                    @error('in_p_guardian_name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Guardian Phone</label>
                                    <input value="{{$EditInPatient->in_p_guardian_phone}}"  type="text" class="form-control" id="in_p_guardian_phone"
                                        name="in_p_guardian_phone" type="text"/>
                                    @error('in_p_guardian_phone')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 ">
                                    <label>Gender</label>
                                    <div class="form-control">
                                       <input name="in_p_sex" type="radio" value="male" @if($EditInPatient->in_p_sex == 'male')? checked : '' @endIf> &nbsp; Male &nbsp;
                                        <input name="in_p_sex" type="radio" value="female" @if($EditInPatient->in_p_sex == 'female')? checked : '' @endIf> &nbsp; Female
                                    </div>
                                    @error('in_p_sex')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Age</label>
                                    <input value="{{$EditInPatient->in_p_age}}"  class="form-control" name="in_p_age" type="number" required>
                                    @error('in_p_age')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Phone</label>
                                    <input value="{{$EditInPatient->in_p_phone}}" class="form-control" name="in_p_phone" type="text">
                                    @error('in_p_phone')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Blood Group</label>
                                    <select name="in_p_blood" id="" class="form-control" required>
                                        <option value="" selected disabled>--Select Blood--</option>

                                        @foreach ($BloodGroups as $BloodGroup)
                                            <option value="{{ $BloodGroup->name }}" @if($EditInPatient->in_p_blood ==  $BloodGroup->name)? selected : '' @endIf>{{ $BloodGroup->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('in_p_blood')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Height(Cm) </label>
                                    <input value="{{$EditInPatient->in_p_height}}" class="form-control" name="in_p_height" type="number" required>
                                    @error('in_p_height')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Weight(kg)</label>
                                    <input value="{{$EditInPatient->in_p_weight}}" class="form-control" name="in_p_weight" type="number" required>
                                    @error('in_p_weight')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>BP</label>
                                    <input value="{{$EditInPatient->in_p_bp}}"  class="form-control" name="in_p_bp" type="number" required>
                                    @error('in_p_bp')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Symtomps</label>
                                    <textarea class="form-control" name="in_p_symptoms" id="" cols="30" rows="3"
                                        required> {{$EditInPatient->in_p_symptoms}}</textarea>
                                    @error('in_p_symptoms')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Notes</label>
                                    <textarea class="form-control" name="in_p_note" id="" cols="30" rows="3"
                                        required>{{$EditInPatient->in_p_note}}</textarea>
                                    @error('in_p_note')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Address</label>
                                    <textarea class="form-control" name="in_p_address" id="" cols="30" rows="3"
                                        required>{{$EditInPatient->in_p_address}}</textarea>
                                    @error('in_p_address')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Admission Date</label>
                                    <input value="{{$EditInPatient->in_p_admission_date}}"  type="date" class="form-control" id="in_p_admission_date"
                                        name="in_p_admission_date" />
                                    @error('in_p_admission_date')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Admission Case</label>
                                    <input value="{{$EditInPatient->in_p_case}}"  type="text" class="form-control" id="in_p_case" name="in_p_case" />
                                    @error('in_p_case')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Casualty</label>
                                    <select class="form-control" id="in_p_casualty" name="in_p_casualty">
                                        <option value="no" @if($EditInPatient->in_p_casualty == 'no')? selected : '' @endIf>No</option>
                                        <option value="yes" @if($EditInPatient->in_p_casualty == 'yes')? selected : '' @endIf>Yes</option>
                                    </select>
                                    @error('in_p_casualty')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Old Patient</label>
                                    <select class="form-control" id="in_p_old_patient" name="in_p_old_patient">
                                        <option value="no" @if($EditInPatient->in_p_old_patient == 'no')? selected : '' @endIf>No</option>
                                        <option value="yes" @if($EditInPatient->in_p_old_patient == 'yes')? selected : '' @endIf>Yes</option>
                                    </select>
                                    @error('in_p_old_patient')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Reference</label>
                                    <input value="{{$EditInPatient->in_p_reference}}"  type="text" class="form-control" id="in_p_reference" name="in_p_reference" />
                                    @error('in_p_reference')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Status</label>
                                    <select class="form-control" id="in_p_bed_status" name="in_p_bed_status">
                                        <option value="" selected disabled>--Select Status--</option>
                                        <option value="active" @if($EditInPatient->in_p_bed_status == 'active')? selected : '' @endIf>active</option>
                                        <option value="inactive" @if($EditInPatient->in_p_bed_status == 'inactive')? selected : '' @endIf>inactive</option>
                                        <option value="pending" @if($EditInPatient->in_p_bed_status == 'pending')? selected : '' @endIf>pending</option>
                                        
                                    </select>
                                    @error('in_p_bed_status')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Doctor</label>
                                    <select class="form-control" id="in_p_doc_id" name="in_p_doc_id">
                                        <option value="" selected disabled>--Select Doctor--</option>
                                        @foreach ($Doctors as $Doctor)
                                            <option value="{{ $Doctor->id }}" @if($EditInPatient->in_p_doc_id == $Doctor->id)? selected : '' @endIf>{{ $Doctor->doc_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('in_p_doc_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Bed Category</label>
                                    <select class="form-control" id="in_p_bed_category_id" name="in_p_bed_category_id">
                                        <option value="" selected disabled>--Select Bed Category--</option>
                                        @foreach ($BedCategorys as $BedCategory)
                                            <option value="{{ $BedCategory->id }}" @if($EditInPatient->in_p_bed_category_id == $BedCategory->id)? selected : '' @endIf>{{ $BedCategory->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('in_p_bed_category_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Bed No</label>
                                    <select class="form-control" id="in_p_bed_id" name="in_p_bed_id">
                                        <option value="" selected disabled>--Select Bed--</option>
                                        @foreach ($Beds as $Bed)
                                            <option value="{{ $Bed->id }}" @if($EditInPatient->in_p_bed_id ==$Bed->id)? selected : '' @endIf>{{ $Bed->bed_no }}</option>
                                        @endforeach
                                    </select>
                                    @error('in_p_bed_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>                               
                            <div class="m-t-20 text-center">
                                <button type="submit" class="btn btn-primary submit-btn">Update In-patient</button>
                            </div>
                        </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
