@extends('backend/layouts/master')
@section('inpatient')

    <div class="content">
        <div class="row">
            <div class="col-sm-5 col-5">
                <h4 class="page-title">Inpatient</h4>
            </div>
            <div class="col-sm-7 col-7 text-right m-b-30">
                <a href="{{ route('inpatient.create') }}" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i>
                    Add In Patient</a>
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
                                <th>PID</th>
                                <th>Name</th>
                                <th>Guardian Name</th>
                                <th>Guardian Phone</th>
                                <th>Case</th>
                                <th>Doctor</th>
                                <th>Bed</th>
                                <th>Action</th>                            
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($InPatients as $InPatient)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $InPatient->name }}</td>
                                <td>{{ $InPatient->price }}</td>
                                <td>{{ $InPatient->mg }}</td>
                                <td>{{ $InPatient->group }}</td>
                                <td>{{ $InPatient->company }}</td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle " data-toggle="dropdown"
                                            aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item"
                                                href="{{ URL::to('admin/inpatient/' . $InPatient->id . '/edit') }}"><i
                                                    class="fa fa-pencil m-r-5 btn-outline-primary btn"></i> Edit</a>
                                            <a class="dropdown-item" href="#">
                                                <form action="{{ route('inpatient.destroy', $InPatient->id) }}" method="POST">
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
                                <th>PID</th>
                                <th>Name</th>
                                <th>Guardian Name</th>
                                <th>Guardian Phone</th>
                                <th>Case</th>
                                <th>Doctor</th>
                                <th>Bed</th>
                                <th>Action</th>  
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
