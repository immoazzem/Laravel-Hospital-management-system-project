@extends('backend/layouts/master')
@section('edit-floor')

    <div class="content">
        <div class="row">
            <div class="col-sm-5 col-5">
                <h4 class="page-title">Blood Bank</h4>
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
                        <h4 class="card-title">Blood Bank Edit Form</h4>
                        <p class="card-text">
                        <form action="{{ route('bloodbank.update', $EditBloodBank->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Blood Bank Name</label>
                                <select name="blood_bag_name" id="" class="form-control" required>
                                    <option value="" selected disabled>--Select Blood--</option>

                                    @foreach ($BloodGroups as $BloodGroup)
                                        <option value="{{ $BloodGroup->name }}" @if($BloodGroup->name == $EditBloodBank->blood_bag_name)? selected : '' @endIf>{{ $BloodGroup->name }}</option>
                                    @endforeach
                                </select>


                                @error('blood_bag_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Blood Quantity</label>
                                <input class="form-control" value="{{ $EditBloodBank->blood_bag_quantity}}" name="blood_bag_quantity" type="number">
                                @error('blood_bag_quantity')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>                                       
                            <div class="m-t-20 text-center">
                                <button type="submit" class="btn btn-primary submit-btn">Update Blood Bank</button>
                            </div>
                        </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
