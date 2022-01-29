@extends('backend/layouts/master')
@section('content')

    <div class="content">
        <div class="row">
            <div class="col-sm-5 col-5">
                <h4 class="page-title">Lab Department</h4>
            </div>
            <div class="col-sm-7 col-7 text-right m-b-30">
                <a href="{{ route('labdepartment.index') }}" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i>
                    Show Lab Department</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card text-left">
                    <img class="card-img-top" src="holder.js/100px180/" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Lab Department Edit Form</h4>
                        <p class="card-text">
                        <form action="{{ route('labdepartment.update', $EditLabDepartment->id) }}" method="post">
                            @csrf
                            @method('PUT')                  
                            <div class="form-group">
                                <label>Lab Department</label>
                                <input class="form-control" value="{{ $EditLabDepartment->name}}" name="name" type="text">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>                                       
                            <div class="m-t-20 text-center">
                                <button type="submit" class="btn btn-primary submit-btn">UpdateLab Department</button>
                            </div>
                        </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
