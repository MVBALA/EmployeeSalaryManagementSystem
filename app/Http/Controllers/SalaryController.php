<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SalaryPay;

// Updated namespace for SalaryPay model

class SalaryController extends Controller
{
    public function index()
    {
        $salaryPayments = SalaryPay::paginate(10);

        return view('salary.index', compact('salaryPayments'));
    }

    public function create()
    {
        return view('salary.create');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'employee_id' => 'required',
            'basic_pay' => 'required|numeric',
            'house_rent_allowance' => 'required|numeric',
            'special_allowance' => 'required|numeric',
            'pf' => 'required|numeric',
            'health_insurance' => 'required|numeric',
        ]);

        $salaryPay = new SalaryPay();
        $salaryPay->employee_id = $validatedData['employee_id'];
        $salaryPay->basic_pay = $validatedData['basic_pay'];
        $salaryPay->house_rent_allowance = $validatedData['house_rent_allowance'];
        $salaryPay->special_allowance = $validatedData['special_allowance'];
        $salaryPay->pf = $validatedData['pf'];
        $salaryPay->health_insurance = $validatedData['health_insurance'];
        $salaryPay->save();


        return redirect()->route('salary.index')->with('success', 'Salary payment record created successfully.');
    }
}
