<?php

namespace App\Http\Controllers;

use App\Events\PayslipEvent;
use App\Models\Employee;
use App\Models\Payment;
use App\Models\SalaryPay;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {

        $payments = Payment::paginate(10);
        return view('payments.index', compact('payments'));
    }

    public function approve($id)
    {

        $payment = Payment::findOrFail($id);

        if ($payment->status === 'Pending') {
            $payment->status = 'Approved';
            $payment->save();

            //Triggering event to send mail

            $employee = Employee::find($payment->employee_id);


            $salary = SalaryPay::where('employee_id', $employee->id)->first();
            PayslipEvent::dispatch($employee, $salary);


            return redirect()->route('payments.index')->with('success', 'Payment approved successfully.');
        }

        return redirect()->route('payments.index')->with('error', 'Payment could not be approved.');
    }

    public function create()
    {
        return view('payments.create');
    }

    public function store(Request $request)
    {

        $data = $request->validate([
            'employee_id' => 'required',
            'employee_name' => 'required',
            'amount' => 'required',
            'year' => 'required',
            'status' => 'required',
        ]);

        Payment::create($data);

        return redirect()->route('payments.create')->with('success', 'Payment created successfully');
    }
}
