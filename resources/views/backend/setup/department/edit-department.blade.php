@extends('backend/layouts/master')
@section('edit-department')

    <div class="content">
        <div class="row">
            <div class="col-sm-5 col-5">
                <h4 class="page-title">Departments</h4>
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
                        <h4 class="card-title">Department Edit Form</h4>
                        <p class="card-text">
                        <form action="{{ route('department.update', $EditDepartment->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Department Name</label>
                                <input class="form-control" value="{{ $EditDepartment->dept_name }}" name="dept_name"
                                    type="text">
                                @error('dept_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea cols="30" name="dept_details" rows="4"
                                    class="form-control">{{ $EditDepartment->dept_details }}</textarea>
                                @error('dept_details')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="display-block">Department Status</label>
                                <div class="form-check form-check-inline">
                                    <input @if ($EditDepartment->dept_status == 'active') ? Checked : '' @endif class="form-check-input" type="radio" name="dept_status"
                                        id="product_active" value="active">
                                    <label class="form-check-label" for="product_active">
                                        Active
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input @if ($EditDepartment->dept_status == 'inactive') ? Checked : '' @endif class="form-check-input" type="radio" name="dept_status"
                                        id="product_inactive" value="inactive">
                                    <label class="form-check-label" for="product_inactive">
                                        Inactive
                                    </label>
                                </div>
                                @error('dept_status')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="m-t-20 text-center">
                                <button type="submit" class="btn btn-primary submit-btn">Update Department</button>&nbsp; Delete
                            </div>
                        </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
