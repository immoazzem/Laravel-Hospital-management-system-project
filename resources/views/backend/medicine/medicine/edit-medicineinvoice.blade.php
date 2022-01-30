@extends('backend/layouts/master')
@section('content')

    <div class="content">
        <div class="row">
            <div class="col-sm-5 col-5">
                <h4 class="page-title">Medicine</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card text-left">
                    <img class="card-img-top" src="holder.js/100px180/" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Medicine Add Form</h4>
                        <p class="card-text">
                        <form action="{{ route('medicineinvoice.update', $EditMedicineInvoice->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Name of Medicine</label>
                                <select  class="form-control"  name="medicine_name" id="" required>
                                    <option value="" selected disabled>--Chose Group--</option>
                                    @foreach ($Medicines as $Medicine)
                                        <option value="{{$Medicine->id}}" @if($Medicine->id == $EditMedicineInvoice->medicine_name)? selected : '' @endIf>{{$Medicine->name}}</option>                                        
                                    @endforeach
                                </select>
                                @error('medicine_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Quantity (Pis)</label>
                                <input class="form-control" value="{{$EditMedicineInvoice->medicine_quantity}}" name="medicine_quantity" type="number" required>
                                @error('medicine_quantity')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>                      
                            <div class="form-group">
                                <label>Price</label>
                                <input class="form-control" value="{{$EditMedicineInvoice->medicine_price}}" name="medicine_price" type="text" required>
                                @error('medicine_price')
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
