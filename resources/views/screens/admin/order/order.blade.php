@extends('layout.admin.app')

@section('content')
    <main class="app-main">
        <div class="app-content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Orders Tables</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Orders Tables</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="app-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12"> <!-- full width -->
                        <div class="card table-card mb-4">
                            <div class="card-header">
                                <h3 class="card-title">Orders Table</h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered custom-dashboard-table">
                                    <thead>
                                        <tr>
                                            <th>User Name</th>
                                            <th>Email</th>
                                            <th>Phone Number </th>
                                            <th>City</th>
                                            <th>Country</th>
                                            <th>Postal Code</th>
                                            <th>Street Address</th>
                                            <th>State</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order)
                                            <tr class="align-middle">
                                                <td>{{ $order->fullname }}</td>
                                                <td>{{ $order->email }}</td>
                                                <td>{{ $order->phone_number }}</td>
                                                <td>{{ $order->city }}</td>
                                                <td>{{ $order->country }}</td>
                                                <td>{{ $order->postal_code }}</td>
                                                <td>{{ $order->street_address }}</td>
                                                <td>{{ $order->state }}</td>
                                                <td>{{ $order->total }}</td>
                                                <td>
                                                    <form method="POST"
                                                        action="{{ route('adminorder.updatestatus', $order->id) }}">
                                                        @csrf
                                                        <select name="status" class="form-select"
                                                            aria-label="Default select example"
                                                            onchange="this.form.submit()">
                                                            <option value="pending"
                                                                {{ $order->status == 'pending' ? 'selected' : '' }}>Pending
                                                            </option>
                                                            <option value="success"
                                                                {{ $order->status == 'success' ? 'selected' : '' }}>Success
                                                            </option>
                                                        </select>
                                                    </form>
                                                </td>
                                                </td>
                                                <td><a href="{{ route('adminorder.detail', $order->id) }}"
                                                        class="btn btn-success">View Order Details</a></td>


                                            </tr>
                                        @endforeach



                                    </tbody>
                                </table>
                            </div>
                            <script>
                                const notyf = new Notyf();


                                @if (session()->has('updatestatus'))
                                    notyf.success("{{ session('updatestatus') }}");
                                @endif
                            </script>
                            <div class="card-footer clearfix">
                                <ul class="pagination pagination-sm m-0 float-end">
                                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
