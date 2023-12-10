@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <p class="h3 text-right mt-3">Payments</p>
                    </div>
                    <div class="col-sm-6 mt-3">
                        <ol class="breadcrumb float-sm-right">
                            {{-- <li class="breadcrumb-item"><a href="{{ route('payments.create') }}"><i
                                        class="fas fa-plus-circle" style="color:green;"></i></a></li> --}}
                            <a href="{{ route('payments.create') }}">
                                <i class="bi bi-plus-circle"></i></a>
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
                    <thead class="thead-dark">
                    <tr>
                        <th>Employee Id</th>
                        <th>Employee Name</th>
                        <th>Amount</th>
                        <th>Date of Approval</th>
                        <th>Status</th>
                        <th>Approval</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($payments as $payment)
                        <tr>
                            <td>{{ $payment->employee_id }}</td>
                            <td>{{ $payment->employee_name }}</td>
                            <td>{{ $payment->amount }}</td>
                            <td>{{ $payment->created_at->format('Y-m-d') }}</td>
                            <td>{{ $payment->status }}</td>
                            <td>
                                @if ($payment->status === 'Pending')
                                    <form action="{{ route('payments.approve', $payment->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-success">Approve</button>
                                    </form>
                                @else
                                    Approved
                                @endif
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center mt-5">
                    {{ $payments->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
@endsection
