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
                                <th>Asset Name</th>
                                <th>Asset Category</th>
                                <th>Asset Price</th>
                                <th>Asset Purchase Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Assets as $Asset)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $Asset->name }}</td>
                                    <td>{{ $Asset->category }}</td>
                                    <td>{{ $Asset->price }}</td>
                                    <td>{{ $Asset->date_of_purchase }}</td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle " data-toggle="dropdown"
                                                aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item"
                                                    href="{{ URL::to('admin/asset/' . $Asset->id . '/edit') }}"><i
                                                        class="fa fa-pencil m-r-5 btn-outline-primary btn"></i> Edit</a>
                                                <a class="dropdown-item" href="#">
                                                    <form action="{{ route('asset.destroy', $Asset->id) }}"
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
                                <th>Asset Name</th>
                                <th>Asset Category</th>
                                <th>Asset Price</th>
                                <th>Asset Purchase Date</th>
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
                        <h4 class="card-title">Asset  Add Form</h4>
                        <p class="card-text">
                        <form action="{{ route('asset.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Asset Name</label>
                                <input class="form-control" name="name" type="text">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Category  Name</label>
                                <select name="category" id="" class="form-control" required>
                                    <option value="" selected disabled>--Select Blood--</option>
                                    @foreach ($AssetCategorys as $AssetCategory)
                                        <option value="{{ $AssetCategory->name }}">{{ $AssetCategory->name }}</option>
                                    @endforeach
                                </select>
                               @error('category')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Asset Price</label>
                                <input class="form-control" name="price" type="text">
                                @error('price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Asset Purchase Date</label>
                                <input class="form-control" name="date_of_purchase" type="date">
                                @error('date_of_purchase')
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
