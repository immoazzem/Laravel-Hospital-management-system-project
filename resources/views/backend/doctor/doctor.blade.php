@extends('backend/layouts/master')
@section('doctor')

    <div class="content">
        <div class="row">
            <div class="col-sm-5 col-5">
                <h4 class="page-title">Doctors</h4>
            </div>
            <div class="col-sm-7 col-7 text-right m-b-30">
                <a href="{{ route('doctor.create') }}" class="btn btn-primary btn-rounded"><i
                        class="fa fa-plus"></i> Add Doctors</a>
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
                                <th>Doctor ID</th>
                                <th>Name</th>
                                <th>Specialist</th>
                                <th>Education</th>
                                <th>Image</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Department</th>
                                <th>Gander</th>
                                <th>Blood</th>
                                <th>Status</th>
                                <th>Address</th>
                                <th>Password</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Doctors as $Doctor)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $Doctor->doc_id }}</td>
                                    <td>{{ $Doctor->doc_name }}</td>
                                    <td>{{ $Doctor->doc_specialist }}</td>
                                    <td>{{ $Doctor->doc_education }}</td>
                                    <td>{{ $Doctor->doc_img }}</td>
                                    <td>{{ $Doctor->doc_phone }}</td>
                                    <td>{{ $Doctor->doc_email }}</td>
                                    <td>
                                        @php
                                    
                                            $Department= collect($Departments)->where('id', $Doctor->doc_dept_id )->first()
                                        @endphp 
                                        {{$Department->dept_name}}
                                    </td>
                                    <td>{{ $Doctor->doc_gender }}</td>                                  
                                    <td>{{ $Doctor->doc_blood }}</td>                    
                                    <td>
                                        <span class="custom-badge @if ( $Doctor->doc_status  == 'active') ? status-green @else status-red @endif">{{  $Doctor->doc_status }}</span>
                                    </td>                                        
                                    <td>{{ $Doctor->doc_address }}</td>
                                    <td>{{ $Doctor->doc_password }}</td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle " data-toggle="dropdown"
                                                aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item"
                                                    href="{{ URL::to('admin/doctor/' . $Doctor->id . '/edit') }}"><i
                                                        class="fa fa-pencil m-r-5 btn-outline-primary btn"></i> Edit</a>
                                                <a class="dropdown-item" href="#">
                                                    <form action="{{ route('doctor.destroy', $Doctor->id) }}"
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
                                <th>SL</th>
                                <th>Doctor ID</th>
                                <th>Name</th>
                                <th>Specialist</th>
                                <th>Education</th>
                                <th>Image</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Department</th>
                                <th>Gander</th>
                                <th>Blood</th>
                                <th>Status</th>
                                <th>Address</th>
                                <th>Password</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
