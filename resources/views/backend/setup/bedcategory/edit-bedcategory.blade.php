@extends('backend/layouts/master')
@section('edit-bedcategory')

    <div class="content">
        <div class="row">
            <div class="col-sm-5 col-5">
                <h4 class="page-title">Edit Bed Cat</h4>
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
                        <h4 class="card-title">Bed Cat Edit Form</h4>
                        <p class="card-text">
                        <form action="{{ route('bedcategory.update', $Editbedcategory->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Floor Name</label>
                                <input class="form-control" value="{{ $Editbedcategory->name }}" name="name"
                                    type="text">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>                                         
                            <div class="m-t-20 text-center">
                                <button type="submit" class="btn btn-primary submit-btn">Update Bedcategory</button>
                            </div>
                        </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
