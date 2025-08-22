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
        Schema::create('employees', function (Blueprint $table) {

            $table->increments('id');
            $table->string('identification_employee')->unique();
            $table->string('name');
            $table->string('address');
            $table->string('telephone');
            $table->string('email', 200)->unique();
            $table->string('profession');
            $table->date('entry_date');
            $table->string('ID_document')->unique();
            $table->string('country');
            $table->timestamps(); // Crea created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
