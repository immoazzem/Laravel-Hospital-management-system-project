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
                                    <input type="text" class="form-control" id="in_p_name" name="in_p_name" placeholder="Patient Name"/>                                   
                                     @error('out_p_name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Guardian Name</label>
                                    <input type="text" class="form-control" id="in_p_guardian_name" name="in_p_guardian_name" placeholder="Patient Name"/>
                                    @error('out_p_father_name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Guardian Phone</label>
                                    <input type="text" class="form-control" id="in_p_guardian_phone" name="in_p_guardian_phone" type="text" placeholder="Phone"/>
                                    @error('out_p_father_name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 ">
                                    <label>Gender</label>
                                    <div class="form-control">

                                        <input name="in_p_sex" type="radio" value="male"> &nbsp; Male &nbsp;
                                        <input name="in_p_sex" type="radio" value="female"> &nbsp; Female
                                    </div>
                                    @error('out_p_gender')
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
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label>Phone</label>
                                    <input class="form-control" name="in_p_phone" type="number" required>
                                    @error('in_p_phone')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Blood Group</label>
                                    <select name="in_p_blood" id="" class="form-control" required>
                                        <option value="" selected disabled>--Select Blood--</option>
    
                                        @foreach ($BloodGroups as $BloodGroup)
                                            <option value="{{ $BloodGroup->name }}" @if($BloodGroup->name == $EditBloodBank->blood_bag_name)? selected : '' @endIf>{{ $BloodGroup->name }}</option>
                                        @endforeach
                                    </select>                               
                                    @error('in_p_blood')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
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
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label>BP</label>
                                    <input class="form-control" name="in_p_bp" type="text" required>
                                    @error('in_p_bp')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Symtomps</label>
                                    <textarea  class="form-control" name="in_p_symptoms" id="" cols="30" rows="3" required></textarea>
                                    @error('in_p_symptoms')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label>Notes</label>
                                    <textarea  class="form-control" name="in_p_note" id="" cols="30" rows="3" required></textarea>
                                    @error('in_p_note')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Address</label>
                                    <textarea  class="form-control" name="in_p_address" id="" cols="30" rows="3" required></textarea>
                                    @error('in_p_address')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label>Admission Date</label>
                                    <input class="form-control" id="in_p_admission_date" placeholder="Admission Date" name="in_p_admission_date"/>                                   
                                     @error('in_p_bp')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label>Admission Case</label>
                                    <input type="text" class="form-control" id="in_p_case" name="in_p_case" placeholder="Patient Case"/>
                                    @error('in_p_bp')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label>Casualty</label>
                                    <select class="form-control" id="in_p_casualty" name="in_p_casualty">
                                    <option value="no">No</option>
                                    <option value="yes">Yes</option>
                                    </select>
                                    @error('in_p_bp')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror 
                                </div>
                                <div class="col-md-12">
                                    <label>Old Patient</label>
                                    <select class="form-control" id="in_p_old_patient" name="in_p_old_patient">
                                        <option value="no">No</option>
                                        <option value="yes">Yes</option>
                                        </select>
                                    @error('in_p_bp')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label>Reference</label>
                                    <input class="form-control" id="in_p_reference" name="in_p_reference"/>                                   
                                     @error('in_p_bp')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label>Doctor</label>
                                    <select class="form-control" id="in_p_doc_id" name="in_p_doc_id">
                                            <option selected hidden>-----Choose Doctor-----</option>
                                            @foreach($doctors as $value)
                                            <option value="{{$value->doc_id}}">{{$value->doc_name}}</option>
                                            @endforeach
                                        </select>                                  
                                     @error('in_p_bp')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label>Bed Category</label>
                                    <select class="form-control" id="in_p_bed_category_id" name="in_p_bed_category_id">
                                            <option selected hidden>Category</option>
                                            @foreach($bed_categorys as $bed_category)
                                            <option value="{{$bed_category->bed_category_id}}">{{$bed_category->bed_category_name}}</option>
                                            @endforeach
                                        </select>                               
                                     @error('in_p_bp')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label>Bed</label>                                   
                                    <select class="form-control" id="in_p_bed_id" name="in_p_bed_id">
                                            <option selected hidden>Bed</option>
                                        </select>                              
                                     @error('in_p_bp')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                            </div>
                                                      <div class="m-t-20 text-center">
                                <button type="submit" class="btn btn-primary submit-btn">Add In Patient</button>
                            </div>
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
