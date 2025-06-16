@extends('layout.web.app')


@section('content')
    <br><br>
    <center><a class="btn btn-warning" href="{{ route('checkout.downloadpdf', $orders->id) }}" target="_blank">
            Download PDF
        </a></center>
    <br><br>


    <div class="container bootdey">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="widget-box">
                    <div class="widget-header widget-header-large">
                        <h3 class="widget-title grey lighter">
                            <i class="ace-icon fa fa-leaf green"></i>
                            Gold Depot receipt
                        </h3>

                        <div class="widget-toolbar no-border invoice-info">
                            <span class="invoice-info-label">Invoice:</span>
                            <span class="red">pending</span>

                            <br>
                            <span class="invoice-info-label">Date:</span>
                            <span class="blue">pending</span>
                        </div>

                        <div class="widget-toolbar hidden-480">
                            <a href="#">
                                <i class="ace-icon fa fa-print"></i>
                            </a>
                        </div>
                    </div>

                    <div class="widget-body">
                        <div class="widget-main padding-24">
                            <div class="row">


                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-xs-11 label label-lg label-success arrowed-in arrowed-right">
                                            <b>Customer Info</b>
                                        </div>
                                    </div>

                                    <div>
                                        <ul class="list-unstyled  spaced">
                                            {{-- @foreach ($orders as $order) --}}
                                            <li>
                                                <i class="ace-icon fa fa-caret-right green"></i>{{ $orders->fullname }}
                                            </li>
                                            <li>
                                                <i class="ace-icon fa fa-caret-right green"></i>{{ $orders->phone_number }}
                                            </li>

                                            <li>
                                                <i class="ace-icon fa fa-caret-right green"></i>{{ $orders->postal_code }}
                                            </li>
                                            <li>
                                                <i class="ace-icon fa fa-caret-right green"></i>{{ $orders->country }}
                                            </li>

                                            <li>
                                                <i
                                                    class="ace-icon fa fa-caret-right green"></i>{{ $orders->street_address }}
                                            </li>

                                            <li class="divider"></li>


                                            {{-- @endforeach --}}

                                        </ul>
                                    </div>
                                </div><!-- /.col -->
                            </div><!-- /.row -->

                            <div class="space"></div>

                            <div>
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th class="hidden-xs">Product Price</th>
                                            <th class="hidden-480">Product Quantity</th>
                                            <th class="hidden-480">Payment Status</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($orders->orderproducts as $order)
                                            <tr>
                                                <td class="center">{{ $order->product_name }}</td>
                                                <td class="hidden-480">{{ $order->product_price }}</td>
                                                <td class="hidden-480">{{ $order->product_quantity }}</td>
                                                <td class="hidden-480">{{ $orders->status }}</td>
                                            </tr>
                                        @endforeach




                                    </tbody>
                                </table>
                            </div>

                            <div class="hr hr8 hr-double hr-dotted"></div>

                            <div class="row">
                                <div class="col-sm-5 pull-right">
                                    <h4 class="pull-right">
                                        Total amount :
                                        <span class="red">{{ $orders->total }}</span>
                                    </h4>
                                </div>
                                <div class="col-sm-7 pull-left"> Extra Information </div>
                            </div>

                            <div class="space-6"></div>
                            <div class="well">
                                Thank you for choosing Ace Company products.
                                We believe you will be satisfied by our services.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
@endsection
@push('scripts')

    @if (session()->has('ordersuccess'))
        <script>
            Swal.fire({
                title: 'Success',
                text: "{{ session('ordersuccess') }}",
                icon: "success",
                showConfirmButton: false,
                timer: 2500

            });
        </script>
    @endif
@endpush
