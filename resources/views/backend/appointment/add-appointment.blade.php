@extends('backend/layouts/master')
@section('add-outpatient')

    <div class="content">
        <div class="row">
            <div class="col-sm-5 col-5">
                <h4 class="page-title">Add Appointments</h4>
            </div>
            <div class="col-sm-7 col-7 text-right m-b-30">
                <a href="{{ route('appointment.index') }}" class="btn btn-primary btn-rounded"><i
                        class="fa fa-show"></i>
                    Show Appointments</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card text-left">
                    <img class="card-img-top" src="holder.js/100px180/" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Appointments Add Form</h4>
                        <p class="card-text">
                        <form action="{{ route('appointment.store') }}" method="post">
                            @csrf
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label>Patient Name</label>
                                    <select class="form-control" name="app_p_id" id="app_p_id" required>
                                        <option value="" selected disabled>--Chose Patient--</option>
                                        @foreach ($OutPatients as $OutPatient)
                                            <option value="{{ $OutPatient->id }}">{{ $OutPatient->out_p_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('app_p_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                {{-- <div class="col-md-4">
                                    <label>Patient Name</label>
                                    <input type="text" id="p_name" class="form-control" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label>Patient Phone</label>
                                    <input type="text" id="p_phone" class="form-control" disabled>
                                </div> --}}
                            </div>
                            <div class="form-group row">

                                <div class="col-md-12">
                                    <label>Doctor Name</label>
                                    <select class="form-control" name="app_doc_id" id="" required>
                                        <option value="" selected disabled>--Chose Doctor--</option>
                                        @foreach ($Doctors as $Doctor)
                                            <option value="{{ $Doctor->id }}">{{ $Doctor->doc_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('app_doc_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                {{-- <div class="col-md-6">
                                    <label>Doctor Name</label>
                                    <input type="text" id="d_name" class="form-control" disabled>
                                </div> --}}
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 ">
                                    <label>Status</label>
                                    <div class="form-control">

                                        <input name="app_status" type="radio" value="active"> &nbsp; Active &nbsp;
                                        <input name="app_status" type="radio" value="inactive"> &nbsp; Inactive
                                    </div>
                                    @error('app_status')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>Date</label>
                                    <input class="form-control" name="app_date" type="date" required>
                                    @error('app_date')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Address</label>
                                    <textarea class="form-control" name="app_message" id="" cols="30" rows="3"
                                        required></textarea>
                                    @error('app_message')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="m-t-20 text-center">
                                <button type="submit" class="btn btn-primary submit-btn">Add Appointments</button>
                            </div>
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <script>
        $(document).ready(function() {

            $(document).on("change", "#app_p_id", function() {
                var app_p_id = $(this).val();
                $.ajax({
                    url: "{{ url('/admin/appointment/patientdata/') }} " + app_p_id,
                    type: 'get',
                    dataType: "json",
                    success: function(data) {
                        $("#p_phone").val(data.out_p_phone);
                        $("#p_name").val(data.out_p_name);
                    }
                });
            });

        });
    </script> --}}
@endsection
