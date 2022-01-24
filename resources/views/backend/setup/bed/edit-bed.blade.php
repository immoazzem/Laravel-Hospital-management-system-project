@extends('backend/layouts/master')
@section('edit-bed')

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
                        <h4 class="card-title">Bed Edit Form</h4>
                        <p class="card-text">
                        <form action="{{ route('bed.update', $Editbed->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Bed No</label>
                                <input class="form-control" value="{{$BedNo}}" name="bed_no" type="number" required>
                                @error('bed_no')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Floor</label>
                                <select  class="form-control"  name="floor" id="" required>
                                    <option value="" selected disabled>--Chose Floor--</option>
                                    @foreach ($Floors as $Floor)
                                        <option value="{{$Floor->name}}" @if($Floor->name == $Editbed->floor)? selected : '' @endIf>{{$Floor->name}}</option>                                        
                                    @endforeach
                                </select>
                                @error('floor')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Bed Cat</label>
                                <select  class="form-control" name="bed_cat" id="" required>
                                    <option value="" selected disabled>--Chose Bed Cat--</option>
                                    @foreach ($BedCATs as $BedCAT)
                                        <option value="{{$BedCAT->name}}" @if($BedCAT->name == $Editbed->bed_cat)? selected : '' @endIf>{{$BedCAT->name}}</option>                                        
                                    @endforeach
                                </select>
                                @error('bed_cat')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Price in Taka</label>
                                <input class="form-control" value="{{$Editbed->price }}" name="price" type="number" required>
                                @error('price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>                                        
                            <div class="m-t-20 text-center">
                                <button type="submit" class="btn btn-primary submit-btn">Update Bed</button>
                            </div>
                        </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
