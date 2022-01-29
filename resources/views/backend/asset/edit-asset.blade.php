@extends('backend/layouts/master')
@section('edit-floor')

    <div class="content">
        <div class="row">
            <div class="col-sm-5 col-5">
                <h4 class="page-title">Asset</h4>
            </div>
            <div class="col-sm-7 col-7 text-right m-b-30">
                <a href="{{ route('asset.index') }}" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i>
                    Show Asset </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card text-left">
                    <img class="card-img-top" src="holder.js/100px180/" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Asset  Edit Form</h4>
                        <p class="card-text">
                        <form action="{{ route('asset.update', $EditAsset->id) }}" method="post">
                            @csrf
                            @method('PUT')                  
                            <div class="form-group">
                                <label>Asset Name</label>
                                <input class="form-control" value="{{$EditAsset->name}}" name="name" type="text">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Category  Name</label>
                                <select name="category" id="" class="form-control" required>
                                    <option value="" selected disabled>--Select Blood--</option>
                                    @foreach ($AssetCategorys as $AssetCategory)
                                        <option value="{{ $AssetCategory->name }}" @if($AssetCategory->name == $EditAsset->category)? selected : '' @endIf>{{ $AssetCategory->name }}</option>
                                    @endforeach
                                </select>
                               @error('category')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Asset Price</label>
                                <input class="form-control" value="{{$EditAsset->price}}" name="price" type="text">
                                @error('price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Asset Purchase Date</label>
                                <input class="form-control" value="{{$EditAsset->date_of_purchase}}" name="date_of_purchase" type="date">
                                @error('date_of_purchase')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>                                
                            <div class="m-t-20 text-center">
                                <button type="submit" class="btn btn-primary submit-btn">Update Asset</button>
                            </div>
                        </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
