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
        Schema::create('reports', function (Blueprint $table) {
            $table->increments('id');




$table->string('id_report');
$table->date('date');
$table->time('generate_hour');

// Llave foránea
$table->integer('responsible_id')->unsigned();
$table->foreign('responsible_id')->references('id')->on('responsibles')->onDelete('cascade')->onUpdate('cascade');


$table->integer('employee_id')->unsigned();
$table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade')->onUpdate('cascade');


$table->integer('area_id')->unsigned();
$table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade')->onUpdate('cascade');


$table->integer('schedule_id')->unsigned();
$table->foreign('schedule_id')->references('id')->on('schedules')->onDelete('cascade')->onUpdate('cascade');



$table->integer('justification_id')->unsigned();
$table->foreign('justification_id')->references('id')->on('justifications')->onDelete('cascade')->onUpdate('cascade');






            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
