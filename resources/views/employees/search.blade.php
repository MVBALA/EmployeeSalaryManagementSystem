@extends('layouts.app')

@section('content')
    <h1 class="text-center font-bold text-xl mt-3 mb-3"> Employee Details </h1>
    @if ($employees->count() > 0)

        <table class="table table-bordered mt-5">
            <thead>
            <tr>
                <td>Employee ID</td>
                <td>Name</td>
                <td>Designation</td>
                <td>Department</td>
                <td>Status</td>
                <td>Action</td>
            </tr>
            </thead>
            <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->id }}</td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->job_title }}</td>
                    <td>{{ $employee->department }}</td>
                    <td>{{ $employee->employee_status }}</td>
                    <td>
                        <!-- Link to view employees details -->
                        <a href="{{ route('employees.show', $employee->id) }}"
                           class="btn btn-primary btn-sm"><i
                                class="fa fa-eye"></i></a>
                        <!-- Link to edit employees -->
                        <a href="{{ route('employees.edit', $employee->id) }}"
                           class="btn btn-primary btn-sm"><i
                                class="fa fa-edit"></i></a>
                        <!-- Link to delete employee -->
                        <button class="btn  btn-outline-danger" type="button"
                                onclick="commonDelete(`{{ route('employees.destroy', $employee->id) }}`)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-trash" viewBox="0 0 16 16">
                                <path
                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"></path>
                                <path
                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"></path>
                            </svg>
                        </button>
                    </td>

                </tr>
            @endforeach

            </tbody>
        </table>

    @else
        <p>No employees found</p>
    @endif
@endsection
