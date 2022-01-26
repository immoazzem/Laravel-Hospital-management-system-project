@extends('backend/layouts/master')
@section('floor')

    <div class="content">
        <div class="row">
            <div class="col-sm-5 col-5">
                <h4 class="page-title">Doctors Schedule</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="table-responsive">
                    @if (session('success'))
                        <h3 class="alert alert-success">{{ session('success') }}</h3>
                    @endif
                    <table id="datatable" class="table table-striped table-bordered custom-table mb-0 " style="width:100%">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Doctor Name</th>
                                <th>Date</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($DoctorSchedules as $DoctorSchedule)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $DoctorSchedule->doc_name }}</td>
                                <td>{{ $DoctorSchedule->date }}</td>
                                <td>{{ $DoctorSchedule->start_time }}</td>
                                <td>{{ $DoctorSchedule->end_time }}</td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle " data-toggle="dropdown"
                                            aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item"
                                                href="{{ URL::to('admin/doctorschedule/' . $DoctorSchedule->id . '/edit') }}"><i
                                                    class="fa fa-pencil m-r-5 btn-outline-primary btn"></i> Edit</a>
                                            <a class="dropdown-item" href="#">
                                                <form action="{{ route('doctorschedule.destroy', $DoctorSchedule->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit"
                                                        class="show_confirm btn-outline-danger btn "><i
                                                            class="fa fa-trash-o"></i></button> &nbsp; Delete

                                                </form>

                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>SL</th>
                                <th>Doctor Name</th>
                                <th>Date</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-left">
                    <img class="card-img-top" src="holder.js/100px180/" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Doctors Schedule Add Form</h4>
                        <p class="card-text">
                        <form action="{{ route('doctorschedule.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Doctor Name</label>
                                <select  class="form-control" name="doc_name" id="" required>
                                    <option value="" selected disabled>--Chose Doctor--</option>
                                    @foreach ($Doctors as $Doctor)
                                        <option value="{{$Doctor->doc_name}}">{{$Doctor->doc_name}}</option>                                        
                                    @endforeach
                                </select>
                                @error('doc_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Date</label>
                                <input class="form-control" name="date" type="date">
                                @error('date')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Start Time</label>
                                <input class="form-control" name="start_time" type="time">
                                @error('start_time')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>End Time</label>
                                <input class="form-control" name="end_time" type="time">
                                @error('end_time')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="m-t-20 text-center">
                                <button type="submit" class="btn btn-primary submit-btn">Create Doctors Schedule</button>
                            </div>
                        </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
