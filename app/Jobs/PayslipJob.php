<?php

namespace App\Jobs;

use App\Mail\PaySlipMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class PayslipJob 
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public $employee;
    public $salary;
    public function __construct($employee,$salary)
    {
        $this->employee = $employee;
        $this->salary = $salary;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->employee->email)->queue(new PaySlipMail($this->employee,$this->salary));
    }
}
