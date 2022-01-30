@extends('backend/layouts/master')
@section('content')

    <div class="content">
        <div class="row">
            <div class="col-sm-5 col-5">
                <h4 class="page-title">Asset</h4>
            </div>
            <div class="col-sm-7 col-7 text-right m-b-30">
                <a href="{{ route('employee.create') }}" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i>
                    Add Employee </a>
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
                                <th>Employee Role</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Gender</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Joining Date</th>
                                <th>Status</th>
                                <th>Address</th>
                                <th>Image</th>
                                <th>Basic Salary</th>
                                <th>House Rent</th>
                                <th>Medicale Announce</th>
                                <th>Convience</th>
                                <th>Bonous</th>
                                <th>Action</th>                             
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Employees as $Employee)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        @php $EmployeeRole=collect($EmployeeRoles)->where('id',$Employee->emp_role_id)->first() 
@endphp
                                        {{ $EmployeeRole->name }}
                                    </td>
                                    <td>{{ $Employee->emp_name }}</td>
                                    <td>{{ $Employee->emp_phone }}</td>
                                    <td>{{ $Employee->emp_sex }}</td>
                                    <td>{{ $Employee->emp_email }}</td>
                                    <td>{{ $Employee->emp_password }}</td>
                                    <td>{{ $Employee->emp_joining_date }}</td>
                                    <td>
                                        <span class="custom-badge @if ($Employee->emp_status == 'active') ? status-green @else status-red @endif">{{ $Employee->emp_status }}</span>
                                        
                                    </td>
                                    <td>{{ $Employee->emp_address }}</td>
                                    <td>{{ $Employee->emp_img }}</td>
                                    <td>{{ $Employee->emp_s_basic }}</td>
                                    <td>{{ $Employee->emp_s_house }}</td>
                                    <td>{{ $Employee->emp_s_medicale }}</td>
                                    <td>{{ $Employee->emp_s_convience }}</td>
                                    <td>{{ $Employee->emp_s_bonous }}</td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle " data-toggle="dropdown"
                                                aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item"
                                                    href="{{ URL::to('admin/employee/' . $Employee->id . '/edit') }}"><i
                                                        class="fa fa-pencil m-r-5 btn-outline-primary btn"></i> Edit</a>
                                                <a class="dropdown-item" href="#">
                                                    <form action="{{ route('employee.destroy', $Employee->id) }}"
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
                                <th>Employee Role</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Gender</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Joining Date</th>
                                <th>Status</th>
                                <th>Address</th>
                                <th>Image</th>
                                <th>Basic Salary</th>
                                <th>House Rent</th>
                                <th>Medicale Announce</th>
                                <th>Convience</th>
                                <th>Bonous</th>
                                <th>Action</th>     
                            </tr>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
