@extends('backend/layouts/master')
@section('doctor')

    <div class="content">
        <div class="row">
            <div class="col-sm-5 col-5">
                <h4 class="page-title">Prescription</h4>
            </div>
            <div class="col-sm-7 col-7 text-right m-b-30">
                <a href="{{ route('prescription.create') }}" class="btn btn-primary btn-rounded"><i
                        class="fa fa-plus"></i> Add Prescription</a>
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
                                <th>Code</th>
                                <th>Date</th>
                                <th>Patient Name</th>
                                <th>Doctore Name</th>
                                <th>Medicines</th>
                                <th>Note</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Prescriptions as $Prescription)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $Prescription->prescription_code }}</td>
                                    <td>{{ $Prescription->prescription_date }}</td>
                                    <td>
                                        @php
                                    
                                        $Department= collect($Departments)->where('id', $Doctor->doc_dept_id )->first()
                                        @endphp 
                                        {{ $Prescription->prescription_p_id }}
                                    </td>
                                    <td>
                                        @php
                                    
                                        $Department= collect($Departments)->where('id', $Doctor->doc_dept_id )->first()
                                        @endphp 
                                        {{ $Prescription->prescription_doc_id }}
                                    </td>
                                    <td>
                                        @php
                                    
                                        $Department= collect($Departments)->where('id', $Doctor->doc_dept_id )->first()
                                        @endphp 
                                        {{ $Prescription->med }}
                                    </td>
                                    <td>{{ $Prescription->prescription_note }}</td>
{{--                            
                                    <td>
                                        <span class="custom-badge @if ( $Doctor->doc_status  == 'active') ? status-green @else status-red @endif">{{  $Doctor->doc_status }}</span>
                                    </td>                                         --}}
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle " data-toggle="dropdown"
                                                aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item"
                                                    href="{{ URL::to('admin/doctor/' . $Prescription->id . '/edit') }}"><i
                                                        class="fa fa-pencil m-r-5 btn-outline-primary btn"></i> Edit</a>
                                                <a class="dropdown-item" href="#">
                                                    <form action="{{ route('doctor.destroy', $Prescription->id) }}"
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
                                <th>Code</th>
                                <th>Date</th>
                                <th>Patient Name</th>
                                <th>Doctore Name</th>
                                <th>Medicines</th>
                                <th>Note</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
