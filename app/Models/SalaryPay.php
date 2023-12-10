<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalaryPay extends Model
{
    use HasFactory;

    protected $table = 'salary_pays';

    protected $fillable = [
        'employee_id',
        'basic_pay',
        'house_rent_allowance',
        'special_allowance',
        'pf',
        'health_insurance',
    ];

}
