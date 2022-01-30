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
                                <select id="MedicineName" class="form-control" name="medicine_name" id="" required>
                                    <option value="" selected disabled>--Chose Medicine--</option>
                                    @foreach ($Medicines as $Medicine)
                                        <option value="{{ $Medicine->id }}" @if($Medicine->id == $EditMedicineInvoice->medicine_name)? selected : '' @endIf>{{ $Medicine->name }}</option>
                                    @endforeach
                                </select>
                                @error('medicine_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Quantity (Pis)</label>
                                <input class="form-control medicine_quantityy" value="{{$EditMedicineInvoice->medicine_quantity}}" id="medicine_quantityy" value="1"
                                    name="medicine_quantity" type="number" required>
                                @error('medicine_quantity')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input id="medicine_price" value="{{$EditMedicineInvoice->medicine_price}}" class="form-control" name="medicine_price" type="number"
                                    required>
                                @error('medicine_price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <span id="MedunitPrice" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>Discount (%)</label>
                                <input id="medicine_discount" value="{{$EditMedicineInvoice->medicine_discount}}" class="form-control medicine_discountt" name="medicine_discount" type="number"
                                    required>
                                @error('medicine_discount')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                               
                            </div>
                            <div class="form-group">
                                <label>Grand Total</label>
                                <input id="medicine_total" value="{{$EditMedicineInvoice->medicine_total}}" class="form-control medicine_totall" name="medicine_total" type="text"
                                    required>
                                @error('medicine_total')
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
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function() {
            $('#MedicineName').on('change', function(e) {
                var Medicine_id = e.target.value;
                $.ajax({
                    url: "{{ url('/admin/mediprice') }}" + '/' + Medicine_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $.each(data, function(key, value) {
                            //alert(value.id)
                            $('#medicine_price').empty();
                            $('#MedunitPrice').text('Unit Price = ' + value.price);
                            var UnitPrice = value.price;
                            var medicine_quantity = $('#medicine_quantityy').val();
                            var Total = UnitPrice * medicine_quantity;
                            $('#medicine_price').val(Total);

                            var DiscountVal =  $('#medicine_discount').val();
                            var f =  parseInt(DiscountVal);
                             
                            var discount = Total *  f/100 ;
                            
                            $('#medicine_total').val(Total - discount);
                        });
                    }
                })

            });
        });
    </script> 
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).ready(function() {
            $('.medicine_quantityy').on('keypress change keydown', function() {
                var Medicine_id = $('#MedicineName').val();
                $.ajax({
                    url: "{{ url('/admin/mediprice') }}" + '/' + Medicine_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $.each(data, function(key, value) {
                            //alert(value.id)
                            $('#medicine_price').empty();
                            $('#MedunitPrice').text('Unit Price = ' + value.price);
                            var UnitPrice = value.price;
                            var medicine_quantity = $('#medicine_quantityy').val();
                            var Total = UnitPrice * medicine_quantity;
                            $('#medicine_price').val(Total);

                            var DiscountVal =  $('.medicine_discountt').val();
                            var f =  parseInt(DiscountVal);
                             
                            var discount = Total *  f/100 ;
                            
                            $('.medicine_totall').val(Total - discount);
                        });
                    }
                })

               // alert('sdsd')
            });
        });
    </script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).ready(function() {
            $('.medicine_discountt').on('keypress change keydown', function() {
                var Medicine_id = $('#MedicineName').val();
                $.ajax({
                    url: "{{ url('/admin/mediprice') }}" + '/' + Medicine_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $.each(data, function(key, value) {
                            //alert(value.id)
                            $('#medicine_price').empty();
                            $('#MedunitPrice').text('Unit Price = ' + value.price);
                            var UnitPrice = value.price;
                            var medicine_quantity = $('#medicine_quantityy').val();
                            var Total = UnitPrice * medicine_quantity;
                            $('#medicine_price').val(Total);

                            var DiscountVal =  $('.medicine_discountt').val();
                            var f =  parseInt(DiscountVal);
                             
                            var discount = Total *  f/100 ;
                            
                            $('.medicine_totall').val(Total - discount);
                        });
                    }
                })

               // alert('sdsd')
            });
        });
    </script>
@endsection
