@extends('backend/layouts/master')
@section('content')

    <div class="content">
        <div class="row">
            <div class="col-sm-5 col-5">
                <h4 class="page-title">Lab Test Edit</h4>
            </div>
            <div class="col-sm-7 col-7 text-right m-b-30">
                <a href="{{ route('asset.index') }}" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i>
                    Show Lab Test </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card text-left">
                    <img class="card-img-top" src="holder.js/100px180/" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Lab Test Edit Form</h4>
                        <p class="card-text">
                        <form action="{{ route('labtest.update', $EditLabTest->id) }}" method="post">
                            @csrf
                            @method('PUT')                  
                            <div class="form-group">
                                <label>Test Name</label>
                                <input class="form-control" value="{{$EditLabTest->name}}" name="name" type="text">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Doctors Name</label>
                                <select name="doc_id" id="" class="form-control" required>
                                    <option value="" selected disabled>--Select Doctor--</option>
                                    @foreach ($Doctors as $Doctor)
                                        <option value="{{ $Doctor->id }}" @if($Doctor->id == $EditLabTest->doc_id)? selected : '' @endIf>{{ $Doctor->doc_name }}</option>
                                    @endforeach
                                </select>
                                @error('doc_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Out Patient Name</label>
                                <select name="out_p_id" id="" class="form-control">
                                    <option value="" selected disabled>--Select Blood--</option>
                                    @foreach ($OutPatients as $OutPatient)
                                        <option value="{{ $OutPatient->id }}"  @if($OutPatient->id == $EditLabTest->out_p_id)? selected : '' @endIf>{{ $OutPatient->out_p_name }}</option>
                                    @endforeach
                                </select>
                                @error('out_p_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>In Patient Name</label>
                                <select name="in_p_id" id="" class="form-control">
                                    <option value="0" selected disabled>--Select Blood--</option>
                                    {{-- @foreach ($Doctors as $Doctor)
                                        <option value="{{ $Doctor->id }}">{{ $Doctor->doc_name }}</option>
                                    @endforeach --}}
                                </select>
                                @error('in_p_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Lab Depeartment</label>
                                <select name="lab_department" id="" class="form-control">
                                    <option value="Empty" selected disabled>--Select Blood--</option>
                                    @foreach ($LabDepartments as $LabDepartment)
                                        <option value="{{ $LabDepartment->id }}"  @if($LabDepartment->id == $EditLabTest->id)? selected : '' @endIf>{{ $LabDepartment->name }}</option>
                                    @endforeach
                                </select>
                                @error('lab_department')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input class="form-control" value="{{$EditLabTest->price}}" name="price" type="text">
                                @error('price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Test Date</label>
                                <input class="form-control" value="{{$EditLabTest->date_of_test}}" name="date_of_test" type="date">
                                @error('date_of_test')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>                        
                            <div class="m-t-20 text-center">
                                <button type="submit" class="btn btn-primary submit-btn">Update Lab Test</button>
                            </div>
                        </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
