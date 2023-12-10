@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center font-bold text-xl mt-2 mb-3">Edit Employee</h1>

        <form action="{{ route('employees.update', $employee->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <!-- Employee Id -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Employee Id:</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                            <input type="text" disabled class="form-control @error('name') is-invalid @enderror"
                                   name="name"
                                   value="{{ old('id',$employee->id) }}">
                        </div>

                    </div>
                    <!-- Employee Name -->
                    <div class="form-group">
                        <label for="name">Full Name:</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                   value="{{ old('name',$employee->name) }}">
                            @error('name')
                            <span class="invalid-feedback" role="alert"> <strong> {{ $message }} </strong> </span>
                            @enderror
                        </div>
                    </div>

                    <!-- Employee Email Address-->
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                   value="{{ old('email',$employee->email) }}">
                            @error('email')
                            <span class="invalid-feedback" role="alert"> <strong> {{ $message }} </strong> </span>
                            @enderror
                        </div>
                    </div>

                    <!-- Employee Phone Number -->
                    <div class="form-group">
                        <label for="phone_number">Phone Number:</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            <input type="tel" class="form-control @error('phone_number') is-invalid @enderror"
                                   name="phone_number" value="{{ old('phone_number',$employee->phone_number) }}">
                            @error('phone_number')
                            <span class="invalid-feedback" role="alert"> <strong> {{ $message }} </strong> </span>
                            @enderror
                        </div>
                    </div>

                    <!-- Employee Date of Birth -->
                    <div class="form-group">
                        <label for="date_of_birth">Date of Birth:</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror"
                                   name="date_of_birth" value="{{ old('date_of_birth',$employee->date_of_birth) }}">
                            @error('date_of_birth')
                            <span class="invalid-feedback" role="alert"> <strong> {{ $message }} </strong> </span>
                            @enderror
                        </div>
                    </div>

                    <!-- Employee Gender-->
                    <div class="form-group">
                        <label>Gender:</label>
                        <div class="input-group">
                            <div class="form-check me-4">
                                <input type="radio" class="form-check-input @error('gender') is-invalid @enderror"
                                       name="gender"
                                       value="male" {{ old('gender',$employee->gender) === 'male' ? 'checked' : '' }}>
                                <label class="form-check-label">Male</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input @error('gender') is-invalid @enderror"
                                       name="gender"
                                       value="female" {{ old('gender',$employee->gender) === 'female' ? 'checked' : '' }}>
                                <label class="form-check-label">Female</label>
                            </div>
                        </div>
                    </div>

                    <!-- Employee Nationality -->
                    <div class="form-group">
                        <label for="nationality">Nationality:</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-globe"></i></span>
                            <input type="text" class="form-control @error('nationality') is-invalid @enderror"
                                   name="nationality" value="{{ old('nationality',$employee->nationality) }}">
                            @error('nationality')
                            <span class="invalid-feedback" role="alert"> <strong> {{ $message }} </strong> </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="col-md-6">

                    <!-- Employee Address -->
                    <div class="form-group">
                        <label for="address">Address:</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                            <input type="text" class="form-control @error('address') is-invalid @enderror"
                                   name="address"
                                   value="{{ old('address',$employee->address) }}">
                            @error('address')
                            <span class="invalid-feedback" role="alert"> <strong> {{ $message }} </strong> </span>
                            @enderror
                        </div>
                    </div>

                    <!-- Employee Job Title -->
                    <div class="form-group">
                        <label for="job_title">Job Title:</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                            <input type="text" class="form-control @error('job_title') is-invalid @enderror"
                                   name="job_title" value="{{ old('job_title',$employee->job_title) }}">
                            @error('job_title')
                            <span class="invalid-feedback" role="alert"> <strong> {{ $message }} </strong> </span>
                            @enderror
                        </div>
                    </div>

                    <!-- Employee Department -->
                    <div class="form-group">
                        <label for="department">Department:</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-building"></i></span>
                            <input type="text" class="form-control @error('department') is-invalid @enderror"
                                   name="department" value="{{ old('department',$employee->department) }}">
                            @error('department')
                            <span class="invalid-feedback" role="alert"> <strong> {{ $message }} </strong> </span>
                            @enderror
                        </div>
                    </div>

                    <!-- Employee Start Date -->
                    <div class="form-group">
                        <label for="employment_start_date">Employment Start Date:</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            <input type="date" class="form-control @error('employment_start_date') is-invalid @enderror"
                                   name="employment_start_date"
                                   value="{{ old('employment_start_date',$employee->employment_start_date) }}">
                            @error('employment_start_date')
                            <span class="invalid-feedback" role="alert"> <strong> {{ $message }} </strong> </span>
                            @enderror
                        </div>
                    </div>

                    <!-- Employee End Date -->
                    <div class="form-group">
                        <label for="employment_end_date">Employment End Date:</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            <input type="date" class="form-control @error('employment_end_date') is-invalid @enderror"
                                   name="employment_end_date"
                                   value="{{ old('employment_end_date',$employee->employment_end_date) }}">
                            @error('employment_end_date')
                            <span class="invalid-feedback" role="alert"> <strong> {{ $message }} </strong> </span>
                            @enderror
                        </div>
                    </div>

                    <!-- Employee Status -->
                    <div class="form-group">
                        <label for="employee_status">Employee Status:</label>
                        <div class="input-group">
                            <div class="form-check pe-4">
                                <input type="radio"
                                       class="form-check-input @error('employee_status',$employee->employee_status) is-invalid @enderror"
                                       name="employee_status"
                                       value="active" {{ old('employee_status') === 'active' ? 'checked' : '' }}>
                                <label class="form-check-label" for="employee_status_active">Active</label>
                            </div>
                            <div class="form-check">
                                <input type="radio"
                                       class="form-check-input @error('employee_status') is-invalid @enderror"
                                       name="employee_status"
                                       value="inactive" {{ old('employee_status',$employee->employee_status) === 'inactive' ? 'checked' : '' }}>
                                <label class="form-check-label" for="employee_status_inactive">Inactive</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-3">
                <button type="submit" class="btn btn-primary  me-4 text-black" onclick="commonDelete(`{{ route('employees.destroy', $employee->id) }}`)">Update Employee</button>
            </div>
        </form>
    </div>
@endsection
