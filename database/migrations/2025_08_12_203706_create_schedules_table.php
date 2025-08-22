<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_schedule', 16)->unique();
            $table->string('evening', 100);
            $table->string('continuous_shift');
            $table->boolean('full_time');
            $table->boolean('half_time');
            $table->string('morning');


            $table->Integer('employee_id')->unsigned();
$table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};