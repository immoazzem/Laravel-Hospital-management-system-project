@extends('backend/layouts/master')
@section('department')

    <div class="content">
        <div class="row">
            <div class="col-sm-5 col-5">
                <h4 class="page-title">Departments</h4>
            </div>
            {{-- <div class="col-sm-7 col-7 text-right m-b-30">
                <a href="{{ route('department.create') }}" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i>
                    Add Department</a>
            </div> --}}
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="table-responsive">
                    @if (session('success'))
                        <h3 class="alert alert-success">{{ session('success') }}</h3>
                    @endif
                    <table class="table table-striped custom-table mb-0 datatable">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Department Name</th>
                                <th>Description </th>
                                <th>Status</th>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Departments as $Department)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $Department->dept_name }}</td>
                                    <td>{{ $Department->dept_details }}</td>
                                    <td><span
                                            class="custom-badge @if ($Department->dept_status == 'active') ? status-green @else status-red @endif">{{ $Department->dept_status }}</span>
                                    </td>

                                    {{-- <td><span class="custom-badge status-green">Active</span></td> --}}
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                                aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item"
                                                    href="{{ URL::to('admin/department/' . $Department->id . '/edit') }}"><i
                                                        class="fa fa-pencil m-r-5 btn-outline-primary btn"></i> Edit</a>
                                                <a class="dropdown-item" href="#">
                                                    <form action="{{ route('department.destroy', $Department->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        
                                                        <button type="submit" class="show_confirm btn-outline-danger btn "><i class="fa fa-trash-o"></i></button>
                                                            
                                                    </form>

                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- {!! $Department->links() !!} --}}
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-left">
                    <img class="card-img-top" src="holder.js/100px180/" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Department Add Form</h4>
                        <p class="card-text">
                        <form action="{{ route('department.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Department Name</label>
                                <input class="form-control" name="dept_name" type="text">
                                @error('dept_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea cols="30" name="dept_details" rows="4" class="form-control"></textarea>
                                @error('dept_details')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="display-block">Department Status</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="dept_status" id="product_active"
                                        value="active">
                                    <label class="form-check-label" for="product_active">
                                        Active
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="dept_status" id="product_inactive"
                                        value="inactive">
                                    <label class="form-check-label" for="product_inactive">
                                        Inactive
                                    </label>
                                </div>
                                @error('dept_status')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="m-t-20 text-center">
                                <button type="submit" class="btn btn-primary submit-btn">Create Department</button>
                            </div>
                        </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
