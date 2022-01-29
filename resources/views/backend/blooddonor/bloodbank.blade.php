@extends('backend/layouts/master')
@section('content')

    <div class="content">
        <div class="row">
            <div class="col-sm-5 col-5">
                <h4 class="page-title">Blood Bank</h4>
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
                                <th>Blood Bank Name</th>
                                <th>Blood Quantity</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($BloodBanks as $BloodBank)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $BloodBank->blood_bag_name }}</td>
                                    <td>{{ $BloodBank->blood_bag_quantity }}</td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle " data-toggle="dropdown"
                                                aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item"
                                                    href="{{ URL::to('admin/bloodbank/' . $BloodBank->id . '/edit') }}"><i
                                                        class="fa fa-pencil m-r-5 btn-outline-primary btn"></i> Edit</a>
                                                <a class="dropdown-item" href="#">
                                                    <form action="{{ route('bloodbank.destroy', $BloodBank->id) }}"
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
                                <th>Blood Bank Name</th>
                                <th>Blood Quantity</th>
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
                        <h4 class="card-title">Blood Bank Add Form</h4>
                        <p class="card-text">
                        <form action="{{ route('bloodbank.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Blood Bank Name</label>
                                <select name="blood_bag_name" id="" class="form-control" required>
                                    <option value="" selected disabled>--Select Blood--</option>

                                    @foreach ($BloodGroups as $BloodGroup)
                                        <option value="{{ $BloodGroup->name }}">{{ $BloodGroup->name }}</option>
                                    @endforeach
                                </select>


                                @error('blood_bag_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Blood Quantity</label>
                                <input class="form-control" name="blood_bag_quantity" type="number">
                                @error('blood_bag_quantity')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="m-t-20 text-center">
                                <button type="submit" class="btn btn-primary submit-btn">Create Blood Bank</button>
                            </div>
                        </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
