@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Salary Payment</h1>

        <form method="POST" action="{{ route('salary.store') }}">
            @csrf

            <div class="form-group">
                <label for="employee_id">Employee ID</label>
                <input type="text" name="employee_id" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="basic_pay">Role</label>
                <input type="text" name="position" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="basic_pay">Basic Pay</label>
                <input type="text" name="basic_pay" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="house_rent_allowance">House Rent Allowance</label>
                <input type="text" name="house_rent_allowance" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="special_allowance">Special Allowance</label>
                <input type="text" name="special_allowance" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="pf">PF</label>
                <input type="text" name="pf" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="health_insurance">Health Insurance</label>
                <input type="text" name="health_insurance" class="form-control" required>
            </div>

            <!-- Add validation errors if any -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
