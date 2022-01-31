@extends('backend/layouts/master')
@section('content')

<script>
    function printDiv() {
        var divContents = document.getElementById("GFG").innerHTML;
        var a = window.open('', '', 'height=500, width=500');
        a.document.write('<html><body>');
        //a.document.write('<body > <h1>Div contents are <br>');
        a.document.write(divContents);
        a.document.write('</body></html>');
        a.document.close();
        a.print();
    }
</script>
    <div class="content">
        <div class="row">
            <div class="col-sm-5 col-5">
                <h4 class="page-title">Invoice</h4>
            </div>
            <div class="col-sm-7 col-7 text-right m-b-30">
                <a href="{{ route('medicineinvoice.create') }}" class="btn btn-primary btn-rounded"><i
                        class="fa fa-plus"></i> &nbsp; Create Invoices
                </a>
                <a href="{{ route('medicineinvoice.index') }}" class="btn btn-primary btn-rounded"><i
                        class="fa fa-eye"></i> &nbsp; View Invoices
                </a>
                <input class="btn btn-danger btn-rounded" type="button" value="Print Invoice" onclick="printDiv()"> 
            </div>

        </div>
        <div id="GFG" class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    @if (session('success'))
                        <h3 class="alert alert-success">{{ session('success') }}</h3>
                    @endif
                    <table id="datatable" class="table custom-table mb-0 " style="width:100%">
                        <thead>
                            <h4>Islam Hospital & Diagnostic Center</h4>
                            <p>Medicine Invoice</p>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Invoice No</td>
                                <td>::</td>
                                <td>{{$ShowMedicineInvoice->invoice_no}}</td>
                            </tr>
                            <tr>
                                <td>Name of Medicine</td>
                                <td>::</td>
                                <td>
                                    @php $Medicine = collect($Medicines)
                                            ->where('id', $ShowMedicineInvoice->medicine_name)
                                            ->first();
                                    @endphp
                                    {{ $Medicine->name }}
                                </td>
                            </tr>
                            <tr>
                                <td>Date</td>
                                <td>::</td>
                                <td>{{ $ShowMedicineInvoice->created_at }}</td>                               

                            </tr>  
                            <tr>
                                <td>Ouantity (Pis)</td>
                                <td>::</td>
                                <td>{{ $ShowMedicineInvoice->medicine_quantity }}</td>

                            </tr>
                            <tr>
                                <td>Price</td>
                                <td>::</td>
                                <td>{{ $ShowMedicineInvoice->medicine_price }}</td>

                            </tr>
                            <tr>
                                <td>Discount (%)</td>
                                <td>::</td>
                                <td>{{ $ShowMedicineInvoice->medicine_discount . '%' }}</td>

                            </tr>
                            <tr>
                                <td>Grant Total</td>
                                <td>::</td>
                                <td>{{ $ShowMedicineInvoice->medicine_total }}</td>

                            </tr>
                                  
                        </tbody>
                        <tfoot>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#medicineInvoicePrint').click(function(e) {
                e.preventDefault();

                var print_ = document.getElementById("#datatable");
                win = window.open("");
                win.document.write(print_.outerHTML);
                win.print();
                win.close();

            });
        });
    </script>
@endsection
