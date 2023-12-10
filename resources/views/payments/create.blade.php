@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Payment</h1>

        <form method="POST" action="{{ route('payments.store') }}">
            @csrf

            <div class="form-group">
                <label for="employee_id">Employee ID</label>
                <input type="text" name="employee_id" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="employee_name">Employee Name</label>
                <input type="text" name="employee_name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="month">Amount</label>
                <input type="text" name="amount" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="year">Date of Approval</label>
                <input type="text" name="year" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <input type="text" name="status" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Create Payment</button>
        </form>
    </div>
@endsection
