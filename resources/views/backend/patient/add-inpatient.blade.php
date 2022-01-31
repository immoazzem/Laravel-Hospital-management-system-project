@extends('backend/layouts/master')
@section('content')

    <div class="content">
        <div class="row">
            <div class="col-sm-5 col-5">
                <h4 class="page-title">Add In Patient</h4>
            </div>
            <div class="col-sm-7 col-7 text-right m-b-30">
                <a href="{{ route('inpatient.index') }}" class="btn btn-primary btn-rounded"><i class="fa fa-show"></i>
                    Show In Patient</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card text-left">
                    <img class="card-img-top" src="holder.js/100px180/" alt="">
                    <div class="card-body">
                        <h4 class="card-title">In Patient Add Form</h4>
                        <p class="card-text">
                        <form action="{{ route('inpatient.store') }}" method="post">
                            @csrf
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label>Patient Name</label>
                                    <input type="text" class="form-control" id="in_p_name" name="in_p_name"/>
                                    @error('in_p_name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Guardian Name</label>
                                    <input type="text" class="form-control" id="in_p_guardian_name"
                                        name="in_p_guardian_name"/>
                                    @error('in_p_guardian_name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Guardian Phone</label>
                                    <input type="text" class="form-control" id="in_p_guardian_phone"
                                        name="in_p_guardian_phone" type="text"/>
                                    @error('in_p_guardian_phone')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 ">
                                    <label>Gender</label>
                                    <div class="form-control">

                                        <input name="in_p_sex" type="radio" value="male"> &nbsp; Male &nbsp;
                                        <input name="in_p_sex" type="radio" value="female"> &nbsp; Female
                                    </div>
                                    @error('in_p_sex')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Age</label>
                                    <input class="form-control" name="in_p_age" type="number" required>
                                    @error('in_p_age')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Phone</label>
                                    <input class="form-control" name="in_p_phone" type="text">
                                    @error('in_p_phone')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Blood Group</label>
                                    <select name="in_p_blood" id="" class="form-control" required>
                                        <option value="" selected disabled>--Select Blood--</option>

                                        @foreach ($BloodGroups as $BloodGroup)
                                            <option value="{{ $BloodGroup->name }}">{{ $BloodGroup->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('in_p_blood')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Height(Cm) </label>
                                    <input class="form-control" name="in_p_height" type="number" required>
                                    @error('in_p_height')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Weight(kg)</label>
                                    <input class="form-control" name="in_p_weight" type="number" required>
                                    @error('in_p_weight')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>BP</label>
                                    <input class="form-control" name="in_p_bp" type="number" required>
                                    @error('in_p_bp')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Symtomps</label>
                                    <textarea class="form-control" name="in_p_symptoms" id="" cols="30" rows="3"
                                        required></textarea>
                                    @error('in_p_symptoms')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Notes</label>
                                    <textarea class="form-control" name="in_p_note" id="" cols="30" rows="3"
                                        required></textarea>
                                    @error('in_p_note')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Address</label>
                                    <textarea class="form-control" name="in_p_address" id="" cols="30" rows="3"
                                        required></textarea>
                                    @error('in_p_address')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Admission Date</label>
                                    <input type="date" class="form-control" id="in_p_admission_date"
                                        name="in_p_admission_date" />
                                    @error('in_p_admission_date')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Admission Case</label>
                                    <input type="text" class="form-control" id="in_p_case" name="in_p_case" />
                                    @error('in_p_case')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Casualty</label>
                                    <select class="form-control" id="in_p_casualty" name="in_p_casualty">
                                        <option value="no">No</option>
                                        <option value="yes">Yes</option>
                                    </select>
                                    @error('in_p_casualty')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Old Patient</label>
                                    <select class="form-control" id="in_p_old_patient" name="in_p_old_patient">
                                        <option value="no">No</option>
                                        <option value="yes">Yes</option>
                                    </select>
                                    @error('in_p_old_patient')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Reference</label>
                                    <input type="text" class="form-control" id="in_p_reference" name="in_p_reference" />
                                    @error('in_p_reference')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Status</label>
                                    <select class="form-control" id="in_p_bed_status" name="in_p_bed_status">
                                        <option value="" selected disabled>--Select Status--</option>
                                        <option value="active" >active</option>
                                        <option value="inactive" >inactive</option>
                                        <option value="pending" >pending</option>
                                        
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
                                            <option value="{{ $Doctor->id }}">{{ $Doctor->doc_name }}</option>
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
                                            <option value="{{ $BedCategory->id }}">{{ $BedCategory->name }}</option>
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
                                            <option value="{{ $Bed->id }}">{{ $Bed->bed_no }}</option>
                                        @endforeach
                                    </select>
                                    @error('in_p_bed_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="m-t-20 text-center">
                                <button type="submit" class="btn btn-primary submit-btn">Add In Patient</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
