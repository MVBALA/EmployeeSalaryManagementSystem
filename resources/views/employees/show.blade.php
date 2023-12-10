@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title text-center font-bold text-xl  mt-3 mb-3">Employee Details</h2>

                <div class="mt-2">
                    <strong>Employee ID:</strong> {{ $employee->id }}
                </div>
                <div class="mt-2">
                    <strong>Name:</strong> {{ $employee->name }}
                </div>
                <div class="mt-2">
                    <strong>Email:</strong> {{ $employee->email }}
                </div>
                <div class="mt-2">
                    <strong>Phone Number:</strong> {{ $employee->phone_number }}
                </div>
                <div class="mt-2">
                    <strong>Date of Birth:</strong> {{ $employee->date_of_birth }}
                </div>
                <div class="mt-2">
                    <strong>Gender:</strong> {{ $employee->gender }}
                </div>
                <div class="mt-2">
                    <strong>Nationality:</strong> {{ $employee->nationality }}
                </div>
                <div class="mt-2">
                    <strong>Address:</strong> {{ $employee->address }}
                </div>
                <div class="mt-2">
                    <strong>Job Title:</strong> {{ $employee->job_title }}
                </div>
                <div class="mt-2">
                    <strong>Department:</strong> {{ $employee->department }}
                </div>
                <div class="mt-2">
                    <strong>Employment Start Date:</strong> {{ $employee->employment_start_date }}
                </div>
                <div class="mt-2">
                    <strong>Employment End Date:</strong> {{ $employee->employment_end_date }}
                </div>
                <div class="mt-2">
                    <strong>Employee Status:</strong> {{ $employee->employee_status }}
                </div>
                <div class="mt-3 d-flex justify-content-between">
                    <!-- Edit Employee Details -->
                    <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-primary">Edit Employee</a>

                    <!-- Delete Employee Details -->
                    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST"
                          onsubmit="return confirm('Are you sure you want to delete this employee?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger me-5 text-black">Delete Employee</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
