@extends('backend/layouts/master')
@section('add-doctor')


    <div class="content">
        <div class="row">
            <div class="col-sm-5 col-5">
                <h4 class="page-title">Add Prescription</h4>
            </div>
            <div class="col-sm-7 col-7 text-right m-b-30">
                <a href="{{ route('prescription.index') }}" class="btn btn-primary btn-rounded"><i
                        class="fa fa-show"></i>
                    Show Prescription</a>
            </div>
        </div>
        <div class="row" id="Prescription_page">
            <div class="col-md-12">
                <div class="card text-left">
                    <img class="card-img-top" src="holder.js/100px180/" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Prescription Add Form</h4>
                        <p class="card-text">
                        <form action="{{ route('prescription.store') }}" method="post">
                            @csrf

                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label>Date</label>
                                    <input class="form-control" name="prescription_date" type="date" required>
                                    @error('prescription_date')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label>Doctor Name</label>
                                    <select class="form-control" name="prescription_doc_id" id="prescription_doc_id"
                                        required>
                                        <option value="" selected disabled>--Chose Doctor--</option>
                                        @foreach ($Doctors as $Doctor)
                                            <option value="{{ $Doctor->id }}">{{ $Doctor->doc_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('prescription_doc_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label>Patient Type</label>
                                    <select class="form-control" name="" id="Patient_select_id">
                                        <option value="" selected disabled>--Chose Patient--</option>
                                        <option value="inpatient">In Patient</option>
                                        <option value="outpatient">Out Patient</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label>Patient Name</label>
                                    <select class="form-control" name="prescription_p_id" id="prescription_p_id" required>
                                        <option value="" selected disabled>--Chose Patient--</option>
                                        @foreach ($OutPatients as $OutPatient)
                                            <option value="{{ $OutPatient->id }}">{{ $OutPatient->out_p_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('prescription_p_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>
                                        <h4>History</h4>
                                    </label>
                                    <textarea class="form-control textarea" name="prescription_history" id="" cols="30"
                                        rows="3" required></textarea>
                                    @error('prescription_history')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label>
                                        <h4>Notes</h4>
                                    </label>
                                    <textarea class="form-control textarea" name="prescription_note" id="" cols="30"
                                        rows="3" required></textarea>
                                    @error('prescription_note')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row xdisplay_inputx form-group ro">
                                <label>
                                    <h4>Medicine</h4>
                                </label>
                                <table>
                                    <tr>
                                        <td>
                                            <select class='form-control' name="medicine[]" style='width: 170px;'>
                                                <option selected hidden disabled>--Select Medicine--</option>
                                                @foreach ($Medicines as $Medicine)
                                                    <option value='{{ $Medicine->id }}'>{{ $Medicine->name }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <input type="hidden" name="row_no" id="row_no" value=1>
                                        <td>
                                            <input type='text' name='dosage[]' class='form-control'
                                                style='margin-left: 9px; width: 170px;' placeholder="100mg">
                                        </td>
                                        <td>
                                            <input type='text' name='frequency[]' class='form-control'
                                                style='margin-left: 9px; width: 170px;' placeholder="1+0+1">
                                        </td>
                                        <td>
                                            <input type='text' name='days[]' class='form-control'
                                                style='margin-left: 9px; width: 170px;' placeholder="7days">
                                        </td>
                                        <td>
                                            <input type='text' name='instruction[]' class='form-control'
                                                style='margin-left: 9px; width: 170px;' placeholder="After Food">
                                        </td>
                                        <td>
                                            <button class='btn btn-success btn-sm add_field' type="button"
                                                style='margin-left: 8px;'><i class="fa fa-plus-square"></i></button>
                                        </td>
                                    </tr>
                                </table>
                                <div class="input_field"></div>
                            </div>

                            <div class="m-t-20 text-center">

                                <button type="submit" class="btn btn-primary submit-btn">Add Prescription</button>
                            </div>
                        </form>
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


            $('#Patient_select_id').on('change', function(e) {
                var patient_type = e.target.value;
                //alert(Medicine_id);
                if (patient_type) {
                    $.ajax({
                        type: "GET",
                        url: "{{ url('/admin/prescription-patient') }}/" + patient_type,
                        dataType: "json",
                        success: function(data) {
                             $('select[name="prescription_p_id"]').empty();
                            $.each(data, function(key, value) {
    
                                if(value.out_p_name){
                                    
                                        $('select[name="prescription_p_id"]').append(
                                            ' <option value="' + value.out_p_id + '">' + value.out_p_name + '</option>'
                                        )
                
                                } else if(value.in_p_name){
                                    
                                
                                        $('select[name="prescription_p_id"]').append(
                                            ' <option value="' + value.id + '">' + value.in_p_name + '</option>'
                                        )

                                }

                            });
                         }
                    });
                } else {
                    alert('Patient Type Not Found');
                }



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
                    url: "{{ url('/admin/prescription-patient') }}" + '/' + Medicine_id,
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

                            var DiscountVal = $('.medicine_discountt').val();
                            var f = parseInt(DiscountVal);

                            var discount = Total * f / 100;

                            $('.medicine_totall').val(Total - discount);
                        });
                    }
                })

                // alert('sdsd')
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.textarea').wysihtml5();
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var max_field = 10;
            var wrapper = $(".input_field");
            var add_field = $(".add_field");
            var i = 1;

            $(add_field).click(function(e) {
                e.preventDefault();
                if (i < max_field) {
                    i++;
                    $("#row_no").val(i);
                    $(wrapper).append("<div>\
                              <table>\
                                              <tr>\
                                                  <td>\
                                                    <select class='form-control' name='medicine[]' style='width: 170px;'>\
                                                      <option selected hidden disabled>Select</option>\
                                                      @foreach ($Medicines as $Medicine)\
                                                          <option value='{{ $Medicine->id }}'>{{ $Medicine->name }}</option>\
                                                      @endforeach\
                                                    </select>\
                                                  </td>\
                                                  <td>\
                                                    <input type='text' name='dosage[]' class='form-control' style='margin-left: 9px; width:170px;' placeholder='100mg'>\
                                                  </td>\
                                                  <td>\
                                                    <input type='text' name='frequency[]' class='form-control' style='margin-left: 9px; width:170px;' placeholder='1+0+1'>\
                                                  </td>\
                                                  <td>\
                                                    <input type='text' name='days[]' class='form-control' style='margin-left: 9px; width: 170px;' placeholder='7days'>\
                                                  </td>\
                                                  <td>\
                                                    <input type='text' name='instruction[]' class='form-control' style='margin-left: 9px; width: 170px;' placeholder='After Food'>\
                                                  </td>\
                                                  <td>\
                                                    <button class='btn btn-danger btn-sm remove_field' style='margin-left: 8px;'><i class='fa fa-trash'></i></button>\
                                                  </td>\
                                              </tr>\
                                            </table>\</div>");
                }
            });
            $(wrapper).on("click", ".remove_field", function(e) {
                e.preventDefault();
                $(this).closest('div').remove();
                i--;
            });
        });
    </script>
@endsection
