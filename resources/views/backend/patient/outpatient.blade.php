@extends('backend/layouts/master')
@section('outpatient')

    <div class="content">
        <div class="row">
            <div class="col-sm-5 col-5">
                <h4 class="page-title">Out Patient</h4>
            </div>
            <div class="col-sm-7 col-7 text-right m-b-30">
                <a href="{{ route('outpatient.create') }}" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i>
                    Add Out Patient</a>
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
                                <th>SL</th>
                                <th>Patient ID</th>
                                <th>Name</th>
                                <th>Name Father</th>
                                <th>Gander</th>
                                <th>Age</th>
                                <th>Phone</th>
                                <th>Blood</th>
                                <th>Height</th>
                                <th>Weight</th>
                                <th>Bp</th>
                                <th>Symptoms</th>
                                <th>Address</th>
                                <th>Action</th>                               
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($OutPatients as $OutPatient)
                            <tr> 

                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $OutPatient->out_p_id }}</td>
                                <td>{{ $OutPatient->out_p_name }}</td>
                                <td>{{ $OutPatient->out_p_father_name }}</td>
                                <td>{{ $OutPatient->out_p_gender }}</td>
                                <td>{{ $OutPatient->out_p_age }}</td>
                                <td>{{ $OutPatient->out_p_phone }}</td>
                                <td>{{ $OutPatient->out_p_blood }}</td>
                                <td>{{ $OutPatient->out_p_height }}</td>
                                <td>{{ $OutPatient->out_p_weight }}</td>
                                <td>{{ $OutPatient->out_p_symptoms }}</td>
                                <td>{{ $OutPatient->out_p_symptoms }}</td>
                                <td>{{ $OutPatient->out_p_address }}</td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle " data-toggle="dropdown"
                                            aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item"
                                                href="{{ URL::to('admin/outpatient/' . $OutPatient->id . '/edit') }}"><i
                                                    class="fa fa-pencil m-r-5 btn-outline-primary btn"></i> Edit</a>
                                            <a class="dropdown-item" href="#">
                                                <form action="{{ route('outpatient.destroy', $OutPatient->id) }}" method="POST">
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
                                <th>Patient ID</th>
                                <th>Name</th>
                                <th>Name Father</th>
                                <th>Gander</th>
                                <th>Age</th>
                                <th>Phone</th>
                                <th>Blood</th>
                                <th>Height</th>
                                <th>Weight</th>
                                <th>Bp</th>
                                <th>Symptoms</th>
                                <th>Address</th>
                                <th>Action</th>  
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
