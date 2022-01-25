@extends('backend/layouts/master')
@section('edit-inpatient')

    <div class="content">
        <div class="row">
            <div class="col-sm-5 col-5">
                <h4 class="page-title">Edit Bed</h4>
            </div>
            {{-- <div class="col-sm-7 col-7 text-right m-b-30">
                <a href="{{ route('department.create') }}" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i>
                    Add Department</a>
            </div> --}}
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card text-left">
                    <img class="card-img-top" src="holder.js/100px180/" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Medicine Edit Form</h4>
                        <p class="card-text">
                        <form action="{{ route('medicine.update', $EditMedicine->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" value="{{$EditMedicine->name}}" name="name" type="text" required>
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Price in Taka Per Box</label>
                                <input class="form-control" value="{{$EditMedicine->price}}" name="price" type="number" required>
                                @error('price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Mg</label>
                                <input class="form-control" value="{{$EditMedicine->mg}}" name="mg" type="number" required>
                                @error('mg')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Group</label>
                                <select  class="form-control" name="group" id="" required>
                                    <option value="" selected disabled>--Chose Group--</option>
                                    @foreach ($MedicineGroups as $MedicineGroup)
                                        <option value="{{$MedicineGroup->name}}" @if($MedicineGroup->name == $EditMedicine->group)? selected : '' @endIf>{{$MedicineGroup->name}}</option>                                        
                                    @endforeach
                                </select>
                                @error('group')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Company</label>
                                <select  class="form-control" name="company" id="" required>
                                    <option value="" selected disabled>--Chose Company--</option>
                                    @foreach ($MedicineCompanys as $MedicineCompany)
                                        <option value="{{$MedicineCompany->name}}" @if($MedicineCompany->name == $EditMedicine->company)? selected : '' @endIf>{{$MedicineCompany->name}}</option>                                        
                                    @endforeach
                                </select>
                                @error('company')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>                                      
                            <div class="m-t-20 text-center">
                                <button type="submit" class="btn btn-primary submit-btn">Update Medicine</button>
                            </div>
                        </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
