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
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->string('flight_number');
            $table->timestamp('dpt_time')->nullable();
            $table->timestamp('arr_time')->nullable();
            $table->string('flight_time');
            $table->integer('fuel_lbs');
            $table->integer('flight_route');
            $table->string('aircraft');
            $table->string('airline');
            $table->foreignId('dpt_airport')->constrained('airport')->cascadeOnDelete();
            $table->foreignId('arr_airport')->constrained('airport')->cascadeOnDelete();
            $table->integer('gross_revenue')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
