@extends('backend/layouts/master')
@section('bed')

    <div class="content">
        <div class="row">
            <div class="col-sm-5 col-5">
                <h4 class="page-title">Beds</h4>
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
                                <th>Beds No</th>
                                <th>Floor</th>
                                <th>Beds Category</th>
                                <th>Price(Tk)</th>
                                <th>Action</th>                               
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($beds as $bed)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $bed->bed_no }}</td>
                                <td>{{ $bed->floor }}</td>
                                <td>{{ $bed->bed_cat }}</td>
                                <td>{{ $bed->price }}</td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle " data-toggle="dropdown"
                                            aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item"
                                                href="{{ URL::to('admin/bed/' . $bed->id . '/edit') }}"><i
                                                    class="fa fa-pencil m-r-5 btn-outline-primary btn"></i> Edit</a>
                                            <a class="dropdown-item" href="#">
                                                <form action="{{ route('bed.destroy', $bed->id) }}" method="POST">
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
                                <th>Beds No</th>
                                <th>Floor</th>
                                <th>Beds Category</th>
                                <th>Price(Tk)</th>
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
                        <h4 class="card-title">Beds Add Form</h4>
                        <p class="card-text">
                        <form action="{{ route('bed.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Bed No</label>
                                <input class="form-control" name="bed_no" type="number" required>
                                @error('bed_no')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Floor</label>
                                <select  class="form-control" name="floor" id="" required>
                                    <option value="" selected disabled>--Chose Floor--</option>
                                    @foreach ($Floors as $Floor)
                                        <option value="{{$Floor->name}}">{{$Floor->name}}</option>                                        
                                    @endforeach
                                </select>
                                @error('floor')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Bed Cat</label>
                                <select  class="form-control" name="bed_cat" id="" required>
                                    <option value="" selected disabled>--Chose Bed Cat--</option>
                                    @foreach ($BedCATs as $BedCAT)
                                        <option value="{{$BedCAT->name}}">{{$BedCAT->name}}</option>                                        
                                    @endforeach
                                </select>
                                @error('bed_cat')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Price in Taka</label>
                                <input class="form-control" name="price" type="number" required>
                                @error('price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="m-t-20 text-center">
                                <button type="submit" class="btn btn-primary submit-btn">Add Bed</button>
                            </div>
                        </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
