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
        Schema::create('justifications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_justification',);
            $table->string('employees_name');
            $table->string('incident_date');
            $table->string('type_of_justification');
            $table->string('document_type');
            $table->string('late_arrival');
            $table->string('worker_code',16);


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
        Schema::dropIfExists('justifications');
    }
};
