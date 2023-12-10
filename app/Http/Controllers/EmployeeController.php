<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application
     * \Illuminate\Contracts\View\Factory
     * \Illuminate\Contracts\View\View
     * \Illuminate\Foundation\Application
     * to get all Employee details  in show index page
     */
    public function index()
    {
        $employees = Employee::paginate(10);
        return view('employees.index', compact('employees'));
    }

    /**
     * @param StoreEmployeeRequest $request
     * @return \Illuminate\Http\RedirectResponse
     * to store new Employee  data in database
     */
    public function store(StoreEmployeeRequest $request)
    {
        Employee::create($request->validated());

        return redirect()->route('employees.index')
            ->with('success', 'Employee created successfully.');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application
     *
     * to create a new employee function
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * @param Employee $employee
     * @return \Illuminate\Contracts\Foundation\Application
     *
     * to Edit employee details
     */

    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    /**
     * @param Employee $employee
     * @return \Illuminate\Contracts\Foundation\Application
     *
     * to show the particular Employee Details
     */
    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    /**
     * @param UpdateEmployeeRequest $request
     * @param Employee $employee
     * @return \Illuminate\Http\RedirectResponse
     *
     * to  update the paraticuar employee details in the database
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        $employee->update($request->validated());

        return redirect()->route('employees.index')
            ->with('success', 'Employee updated successfully.');
    }

    /**
     * @param Employee $employee
     * @return \Illuminate\Http\RedirectResponse
     *
     * to delete a particular employee details in the database
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employees.index')
            ->with('success', 'Employee deleted successfully.');
    }

    public function searchemployee(Request $request){
        $emp_search = $request->input('search');
        $employees = Employee::where('name', 'LIKE', "%$emp_search%")->get();
        return view('employees.search', compact('employees'));
    }
}
