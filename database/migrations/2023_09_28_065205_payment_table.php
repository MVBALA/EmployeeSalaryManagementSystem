<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->string('employee_name');
            $table->string('month');
            $table->string('year');
            $table->unsignedBigInteger('salary_id');
            $table->foreign('salary_id')->references('id')->on('salary_pays')->onDelete('cascade'); // Ensure onDelete('cascade') for referential integrity.
            $table->decimal('amount');
            $table->string('status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('payments');
    }
};
