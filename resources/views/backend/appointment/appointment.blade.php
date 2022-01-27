@extends('backend/layouts/master')
@section('outpatient')

    <div class="content">
        <div class="row">
            <div class="col-sm-5 col-5">
                <h4 class="page-title">Appointments</h4>
            </div>
            <div class="col-sm-7 col-7 text-right m-b-30">
                <a href="{{ route('appointment.create') }}" class="btn btn-primary btn-rounded"><i
                        class="fa fa-plus"></i>
                    Add Appointments</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    @if (session('success'))
                        <h3 class="alert alert-success">{{ session('success') }}</h3>
                    @endif
                    <table id="datatable" class="table table-striped table-bordered custom-table mb-0 " style="width:100%">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Patient SL</th>
                                <th>Patient Name</th>
                                <th>Patient Phone</th>
                                <th>Doctor Name</th>
                                <th>Schedule</th>
                                <th>Status</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Appointments as $Appointment)
                                <tr>                                
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $Appointment->app_sl }}</td>
                                    <td>
                                        {{-- @php $patient=collect($OutPatients)->where('id', $Appointment->app_p_id)->first() 
                                        @endphp
                                        {{ $patient->out_p_name }} --}}
                                        {{ $Appointment->app_p_name }}
                                    </td>
                                    <td>
                                        {{-- @php $patient=collect($OutPatients)->where('out_p_phone', $Appointment->app_p_phone)->first() 
                                        @endphp
                                        {{ $patient->out_p_phone }} --}}
                                        {{ $Appointment->app_p_phone }}
                                    </td>
                                    <td>
                                        {{-- @php $Doctor=collect($Doctors)->where('id', $Appointment->app_doc_id)->first() 
                                        @endphp
                                        {{ $Doctor->doc_name }} --}}
                                        {{ $Appointment->app_doc_name }}
                                    </td>
                                    <td>{{ $Appointment->app_date }}</td>
                                    <td >
                                        <span class="custom-badge @if ($Appointment->app_status == 'active') ? status-green @else status-red @endif">{{ $Appointment->app_status }}</span>
                                    </td>
                                    <td>{{ $Appointment->app_message }}</td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle " data-toggle="dropdown"
                                                aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item"
                                                    href="{{ URL::to('admin/appointment/' . $Appointment->id . '/edit') }}"><i
                                                        class="fa fa-pencil m-r-5 btn-outline-primary btn"></i> Edit</a>
                                                <a class="dropdown-item" href="#">
                                                    <form action="{{ route('appointment.destroy', $Appointment->id) }}"
                                                        method="POST">
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
                                <th>Sl</th>
                                <th>Patient SL</th>
                                <th>Patient Name</th>
                                <th>Patient Phone</th>
                                <th>Doctor Name</th>
                                <th>Schedule</th>
                                <th>Status</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
