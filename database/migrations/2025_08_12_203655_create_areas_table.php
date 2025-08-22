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
        Schema::create('areas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_area', 16);
            $table->string('human_resources', 100);
            $table->string('teaching', 100);
            $table->string('security', 100);
            $table->string('cleaning', 100);
            $table->string('administration', 100);
            $table->string('accounting', 100);


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
        Schema::dropIfExists('areas');
    }
};
