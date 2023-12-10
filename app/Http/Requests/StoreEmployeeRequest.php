<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:employees',
            'phone_number' => 'required|string|max:20',
            'date_of_birth' => 'required|date',
            'gender' => 'required|string|max:10',
            'nationality' => 'required|string|max:50',
            'address' => 'required|string|max:255',
            'job_title' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'employment_start_date' => 'required|date',
            'employment_end_date' => 'nullable|date',
            'employee_status' => 'required|string|max:20',
        ];
    }
}
