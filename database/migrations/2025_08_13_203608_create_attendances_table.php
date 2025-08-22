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
        Schema::create('attendances', function (Blueprint $table) {
            $table->increments('id');

$table->string('identification_attendance', 16)->unique();
$table->string('name');
$table->date('date');
$table->time('entry_time');
$table->time('exit_time');
$table->boolean('attended');
$table->string('incident_type')->nullable();
$table->text('observation')->nullable();
$table->string('post');
$table->string('justified_document')->nullable();
$table->string('day_completed')->nullable();
$table->float('hours_worked', 5, 2)->nullable();

// Llave foránea
$table->integer('responsible_id')->unsigned();
$table->foreign('responsible_id')->references('id')->on('responsibles')->onDelete('cascade')->onUpdate('cascade');


$table->integer('employee_id')->unsigned();
$table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade')->onUpdate('cascade');

$table->integer('area_id')->unsigned();
$table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade')->onUpdate('cascade');


$table->integer('schedule_id')->unsigned();
$table->foreign('schedule_id')->references('id')->on('schedules')->onDelete('cascade')->onUpdate('cascade');



$table->Integer('justification_id')->unsigned();
$table->foreign('justification_id')->references('id')->on('justifications')->onDelete('cascade')->onUpdate('cascade');




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};
