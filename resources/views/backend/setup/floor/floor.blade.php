@extends('backend/layouts/master')
@section('floor')

    <div class="content">
        <div class="row">
            <div class="col-sm-5 col-5">
                <h4 class="page-title">Floors</h4>
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
                    <table class="table table-striped custom-table mb-0 datatable ">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Floors Name</th>                             
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Floors as $Floor)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $Floor->name }}</td> 
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle " data-toggle="dropdown"
                                                aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item"
                                                    href="{{ URL::to('admin/floor/' . $Floor->id . '/edit') }}"><i
                                                        class="fa fa-pencil m-r-5 btn-outline-primary btn"></i> Edit</a>
                                                <a class="dropdown-item" href="#">
                                                    <form action="{{ route('floor.destroy', $Floor->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        
                                                        <button type="submit" class="show_confirm btn-outline-danger btn "><i class="fa fa-trash-o"></i></button> &nbsp; Delete
                                                            
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
                        <h4 class="card-title">Floor Add Form</h4>
                        <p class="card-text">
                        <form action="{{ route('floor.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Floor Name</label>
                                <input class="form-control" name="name" type="text">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>                                           
                            <div class="m-t-20 text-center">
                                <button type="submit" class="btn btn-primary submit-btn">Create Floor</button>
                            </div>
                        </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
