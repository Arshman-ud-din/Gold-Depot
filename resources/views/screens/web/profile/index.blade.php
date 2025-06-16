@extends('layout.web.app')


@section('content')
    <br><br><br>

    <div class="container bootdey">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="widget-box">
                    <div class="widget-header widget-header-large">
                        <h3 class="widget-title grey lighter">
                            <i class="ace-icon fa fa-leaf green"></i>
                            User Profile
                        </h3>

                    </div>

                    <div class="widget-body">
                        <div class="widget-main padding-24">
                            <div class="row">


                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-xs-11 label label-lg label-success arrowed-in arrowed-right">
                                            <b>Profile</b>
                                        </div>
                                    </div>

                                    <div>
                                        <ul class="list-unstyled  spaced">
                                            <li>
                                                <i class="ace-icon fa fa-caret-right green"></i>{{ $user->first_name }}
                                            </li>
                                            <li>
                                                <i class="ace-icon fa fa-caret-right green"></i>{{ $user->last_name }}
                                            </li>

                                            <li>
                                                <i class="ace-icon fa fa-caret-right green"></i>{{ $user->phone_number }}
                                            </li>
                                            <li>
                                                <i class="ace-icon fa fa-caret-right green"></i>{{ $user->email }}
                                            </li>



                                            <li class="divider"></li>

                                        </ul>
                                    </div>
                                </div><!-- /.col -->
                            </div><!-- /.row -->

                            <div class="space"></div>

                            <div>
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th class="hidden-xs">Email</th>
                                            <th class="hidden-480">Phone Number</th>
                                            <th class="hidden-480"> Orders</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td class="center">{{ $user->first_name }}</td>
                                            <td class="hidden-480">{{ $user->email }}</td>
                                            <td class="hidden-480">{{ $user->phone_number }}</td>
                                            <td class="hidden-480"><a href="{{ route('web.orders') }}">My Orders</a></td>
                                        </tr>




                                    </tbody>
                                </table>
                            </div>

                            <div class="hr hr8 hr-double hr-dotted"></div>

                            <div class="row">
                                {{-- <div class="col-sm-5 pull-right">
                                    <h4 class="pull-right">
                                        Total amount :
                                        <span class="red">{{ $orders->total }}</span>
                                    </h4>
                                </div> --}}
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
    <br><br><br><br>
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
