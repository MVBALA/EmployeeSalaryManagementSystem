@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Salary</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('salary.create') }}"><i
                                        class="fas fa-plus-circle" style="color:green;"></i></a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <div class="row justify-content-center">
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <table class="table">
                    <thead>
                    <tr>
                        <th>Salary ID</th>
                        <th>Role</th>
                        <th>Basic Pay</th>
                        <th>House Rent Allowance</th>
                        <th>Special Allowance</th>
                        <th>PF</th>
                        <th>Health Insurance</th>
                        <th>Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($salaryPayments as $salaryPayment)
                        <tr>
                            <td>{{ $salaryPayment->id }}</td>
                            <td>{{ $salaryPayment->position }}</td>
                            <td>{{ $salaryPayment->basic_pay }}</td>
                            <td>{{ $salaryPayment->house_rent_allowance }}</td>
                            <td>{{ $salaryPayment->special_allowance }}</td>
                            <td>{{ $salaryPayment->pf }}</td>
                            <td>{{ $salaryPayment->health_insurance }}</td>
                            <td>{{ $salaryPayment->total }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center mt-5">
                    {{ $salaryPayments->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
@endsection
