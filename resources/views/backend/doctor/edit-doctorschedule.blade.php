@extends('backend/layouts/master')
@section('edit-floor')

    <div class="content">
        <div class="row">
            <div class="col-sm-5 col-5">
                <h4 class="page-title">Doctors Schedule Edit</h4>
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
                        <h4 class="card-title">Doctors Schedule Edit Form</h4>
                        <p class="card-text">
                        <form action="{{ route('doctorschedule.update', $EditDoctorSchedule->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Doctor Name</label>
                                <select  class="form-control" name="doc_name" id="" required>
                                    <option value="" selected disabled>--Chose Doctor--</option>
                                    @foreach ($Doctors as $Doctor)
                                        <option value="{{$Doctor->doc_name}}" @if($Doctor->doc_name == $EditDoctorSchedule->doc_name)? selected : '' @endIf>{{$Doctor->doc_name}}</option>                                        
                                    @endforeach
                                </select>
                                @error('doc_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Date</label>
                                <input class="form-control" value="{{$EditDoctorSchedule->date}}" name="date" type="date">
                                @error('date')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Start Time</label>
                                <input class="form-control" value="{{$EditDoctorSchedule->start_time}}" name="start_time" type="time">
                                @error('start_time')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Room</label>
                                <input class="form-control" value="{{$EditDoctorSchedule->room}}" name="room" type="number">
                                @error('room')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>End Time</label>
                                <input class="form-control" value="{{$EditDoctorSchedule->end_time}}" name="end_time" type="time">
                                @error('end_time')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>                                      
                            <div class="m-t-20 text-center">
                                <button type="submit" class="btn btn-primary submit-btn">Update Doctors Schedule</button>
                            </div>
                        </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
