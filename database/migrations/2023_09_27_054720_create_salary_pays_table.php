<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('salary_pays', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->string('position');
            $table->decimal('basic_pay', 8, 2);
            $table->decimal('house_rent_allowance', 8, 2);
            $table->decimal('special_allowance', 8, 2);
            $table->decimal('pf', 8, 2);
            $table->decimal('health_insurance', 8, 2);
            $table->decimal('total');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('salary_pays');
    }
};
