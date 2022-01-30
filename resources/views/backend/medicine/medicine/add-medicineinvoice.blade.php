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
                        <form action="{{ route('medicineinvoice.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Name of Medicine</label>
                                <select id="MedicineName" class="form-control" name="medicine_name" id="" required>
                                    <option value="" selected disabled>--Chose Group--</option>
                                    @foreach ($Medicines as $Medicine)
                                        <option value="{{ $Medicine->id }}">{{ $Medicine->name }}</option>
                                    @endforeach
                                </select>
                                @error('medicine_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Quantity (Pis)</label>
                                <input class="form-control" id="medicine_quantity" value="1"  name="medicine_quantity" type="number" required>
                                @error('medicine_quantity')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input id="medicine_price" class="form-control" name="medicine_price" type="text"
                                    required>
                                @error('medicine_price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <span id="MedunitPrice" class="text-danger"></span>
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
               // alert(Medicine_id)

                $.ajax({
                    url: "{{ url('/admin/mediprice' ) }}" + '/' + Medicine_id  ,
                    type: "GET",
                    dataType: "json",
                   
                    success: function(data) {
                       // $('#medicine_price').empty();
                       // $('#medicine_price').val(data.price);MEDICINE
                       //alert(MEDICINE)
                    //    console.log(data.MEDICINE);
                    
                   

                    $.each(data, function(key, value) {
                               //alert(value.id)
                               $('#medicine_price').empty();                                                          
                                 $('#MedunitPrice').text('Unit Price = ' + value.price);
                                 var UnitPrice = value.price;
                                 var medicine_quantity = $('#medicine_quantity').val();
                                 $('#medicine_price').val(UnitPrice * medicine_quantity);

                             

                             // $('#medicine_price').val(value.price);
                            });
                    
                        // $.each(data.subcategories[0].subcategories, function(index,
                        // subcategory) {
                        //     $('#medicine_price').append('<option value="' + MEDICINE
                        //         .id + '">' + MEDICINE.name + '</option>');
                        // })
                    }
                })
                
            });

  
 $('#medicine_quantity').change(function (e) { 
      e.preventDefault();
      
      var Medicine_id = e.target.value;
      if(Medicine_id == null){
                alert('Please Select Medicine Name')
      alert($(this).val());
      
  });



        });
    </script>
@endsection
