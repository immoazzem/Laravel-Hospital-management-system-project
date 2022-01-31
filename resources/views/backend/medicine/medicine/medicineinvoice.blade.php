@extends('backend/layouts/master')
@section('content')

    <div class="content">
        <div class="row">
            <div class="col-sm-5 col-5">
                <h4 class="page-title">Invoice</h4>
            </div>
            <div class="col-sm-7 col-7 text-right m-b-30">
                <a href="{{ route('medicineinvoice.create') }}" class="btn btn-primary btn-rounded"><i
                        class="fa fa-plus"></i>Create Invoice
                </a>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    @if (session('success'))
                        <h3 class="alert alert-success">{{ session('success') }}</h3>
                    @endif
                    <table id="datatable" class="table table-striped table-bordered custom-table mb-0 " style="width:100%">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Invoice No</th>
                                <th>Name of Medicine</th>
                                <th>Ouantity (Pis)</th>
                                <th>Price</th>
                                <th>Discount (%)</th>
                                <th>Grant Total</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($MedicineInvoice as $MedicineInvoic)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $MedicineInvoic->invoice_no }}</td>
                                    <td>
                                        @php $Medicine = collect($Medicines)
                                                ->where('id', $MedicineInvoic->medicine_name)
                                                ->first();
                                        @endphp
                                        {{ $Medicine->name }}
                                    </td>
                                    <td>{{ $MedicineInvoic->medicine_quantity }}</td>
                                    <td>{{ $MedicineInvoic->medicine_price }}</td>
                                    <td>{{ $MedicineInvoic->medicine_discount . '%' }}</td>
                                    <td>{{ $MedicineInvoic->medicine_total }}</td>
                                    <td>{{ $MedicineInvoic->created_at }}</td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle " data-toggle="dropdown"
                                                aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item"
                                                    href="{{ URL::to('admin/medicineinvoice/'.$MedicineInvoic->id) }}"><i
                                                        class="fa fa-eye m-r-5 btn-outline-primary btn"></i> View
                                                </a>
                                                <a class="dropdown-item"
                                                    href="{{ URL::to('admin/medicineinvoice/' . $MedicineInvoic->id . '/edit') }}"><i
                                                        class="fa fa-pencil m-r-5 btn-outline-primary btn"></i> Edit
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <form
                                                        action="{{ route('medicineinvoice.destroy', $MedicineInvoic->id) }}"
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
                                <th>Invoice No</th>
                                <th>Name of Medicine</th>
                                <th>Ouantity (Pis)</th>
                                <th>Price</th>
                                <th>Discount (%)</th>
                                <th>Grant Total</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
   
@endsection
