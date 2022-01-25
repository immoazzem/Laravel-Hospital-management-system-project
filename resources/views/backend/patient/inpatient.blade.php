@extends('backend/layouts/master')
@section('inpatient')

    <div class="content">
        <div class="row">
            <div class="col-sm-5 col-5">
                <h4 class="page-title">Medicine</h4>
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
                                <th>Price(Tk)</th>
                                <th>Mg</th>
                                <th>Group</th>
                                <th>Company</th>
                                <th>Action</th>                               
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Medicines as $Medicine)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $Medicine->name }}</td>
                                <td>{{ $Medicine->price }}</td>
                                <td>{{ $Medicine->mg }}</td>
                                <td>{{ $Medicine->group }}</td>
                                <td>{{ $Medicine->company }}</td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle " data-toggle="dropdown"
                                            aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item"
                                                href="{{ URL::to('admin/medicine/' . $Medicine->id . '/edit') }}"><i
                                                    class="fa fa-pencil m-r-5 btn-outline-primary btn"></i> Edit</a>
                                            <a class="dropdown-item" href="#">
                                                <form action="{{ route('medicine.destroy', $Medicine->id) }}" method="POST">
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
                                <th>Price(Tk)</th>
                                <th>Mg</th>
                                <th>Group</th>
                                <th>Company</th>
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
                        <h4 class="card-title">Medicine Add Form</h4>
                        <p class="card-text">
                        <form action="{{ route('medicine.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="name" type="text" required>
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Price in Taka Per Box</label>
                                <input class="form-control" name="price" type="number" required>
                                @error('price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Mg</label>
                                <input class="form-control" name="mg" type="number" required>
                                @error('mg')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Group</label>
                                <select  class="form-control" name="group" id="" required>
                                    <option value="" selected disabled>--Chose Group--</option>
                                    @foreach ($MedicineGroups as $MedicineGroup)
                                        <option value="{{$MedicineGroup->name}}">{{$MedicineGroup->name}}</option>                                        
                                    @endforeach
                                </select>
                                @error('group')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Company</label>
                                <select  class="form-control" name="company" id="" required>
                                    <option value="" selected disabled>--Chose Company--</option>
                                    @foreach ($MedicineCompanys as $MedicineCompany)
                                        <option value="{{$MedicineCompany->name}}">{{$MedicineCompany->name}}</option>                                        
                                    @endforeach
                                </select>
                                @error('company')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="m-t-20 text-center">
                                <button type="submit" class="btn btn-primary submit-btn">Add Medicine</button>
                            </div>
                        </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
