<?php

namespace App\Console\Commands;

use App\Mail\PaySlipMail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class PayslipCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'payment:report';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'sending mail after payment';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Mail::to('test@gmail.com')->send(new PaySlipMail());
        $this->info("Mail Sent Successfully");
    }
}

