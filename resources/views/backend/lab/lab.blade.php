@extends('backend/layouts/master')
@section('content')

    <div class="content">
        <div class="row">
            <div class="col-sm-5 col-5">
                <h4 class="page-title">Asset</h4>
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
                                <th>Name</th>
                                <th>Doctor Name</th>
                                <th>Out Patient Name</th>
                                <th>In Patient Name</th>
                                <th>Lab Department</th>
                                <th>Price</th>
                                <th>Test Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($LabTests as $LabTest)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $LabTest->name }}</td>
                                    <td>
                                        @php $doctor = collect($Doctors)->where('id', $LabTest->doc_id)->first();
                                        @endphp
                                        {{ $doctor->doc_name }}
                                    </td>
                                    <td>
                                        @php  $OutPatient = collect($OutPatients)->where('id', $LabTest->out_p_id)->first();
                                        @endphp
                                        {{ $OutPatient->in_p_name }}
                                    </td>
                                    <td>
                                        {{-- @php $doctor = collect($Doctors)->where('id', $LabTest->doc_id)->first();
                                        @endphp --}}

                                        {{ $LabTest->in_p_id }}
                                    </td>
                                    <td>{{ $LabTest->lab_department }}</td>
                                    <td>{{ $LabTest->price }}</td>
                                    <td>{{ $LabTest->date_of_test }}</td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle " data-toggle="dropdown"
                                                aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item"
                                                    href="{{ URL::to('admin/labtest/' . $LabTest->id . '/edit') }}"><i
                                                        class="fa fa-pencil m-r-5 btn-outline-primary btn"></i> Edit</a>
                                                <a class="dropdown-item" href="#">
                                                    <form action="{{ route('labtest.destroy', $LabTest->id) }}"
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
                                <th>Name</th>
                                <th>Doctor Name</th>
                                <th>Out Patient Name</th>
                                <th>In Patient Name</th>
                                <th>Lab Department</th>
                                <th>Price</th>
                                <th>Test Date</th>
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
                        <h4 class="card-title">Asset Add Form</h4>
                        <p class="card-text">
                        <form action="{{ route('labtest.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Test Name</label>
                                <input class="form-control" name="name" type="text">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Doctors Name</label>
                                <select name="doc_id" id="" class="form-control" required>
                                    <option value="" selected disabled>--Select Blood--</option>
                                    @foreach ($Doctors as $Doctor)
                                        <option value="{{ $Doctor->id }}">{{ $Doctor->doc_name }}</option>
                                    @endforeach
                                </select>
                                @error('doc_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Out Patient Name</label>
                                <select name="out_p_id" id="" class="form-control">
                                    <option value="" selected disabled>--Select Blood--</option>
                                    @foreach ($OutPatients as $OutPatient)
                                        <option value="{{ $OutPatient->id }}">{{ $OutPatient->out_p_name }}</option>
                                    @endforeach
                                </select>
                                @error('out_p_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>In Patient Name</label>
                                <select name="in_p_id" id="" class="form-control">
                                    <option value="0" selected disabled>--Select Blood--</option>
                                    {{-- @foreach ($Doctors as $Doctor)
                                        <option value="{{ $Doctor->id }}">{{ $Doctor->doc_name }}</option>
                                    @endforeach --}}
                                </select>
                                @error('in_p_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Lab Depeartment</label>
                                <select name="lab_department" id="" class="form-control">
                                    <option value="Empty" selected disabled>--Select Blood--</option>
                                    @foreach ($LabDepartments as $LabDepartment)
                                        <option value="{{ $LabDepartment->id }}">{{ $LabDepartment->name }}</option>
                                    @endforeach
                                </select>
                                @error('lab_department')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input class="form-control" name="price" type="text">
                                @error('price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Test Date</label>
                                <input class="form-control" name="date_of_test" type="date">
                                @error('date_of_test')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="m-t-20 text-center">
                                <button type="submit" class="btn btn-primary submit-btn">Create Asset </button>
                            </div>
                        </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
