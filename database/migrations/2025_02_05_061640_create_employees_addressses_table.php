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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('city', 45);
        });

        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('emp_name', 45);
            $table->float('emp_salary');
            $table->unsignedBigInteger('add_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees_addressses');
    }
};
