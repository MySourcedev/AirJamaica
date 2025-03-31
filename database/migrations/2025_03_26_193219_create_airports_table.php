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
        Schema::create('airport', function (Blueprint $table) {
            $table->id();
            $table->string('ICAO_code')->unique();
            $table->string('IATA_code');
            $table->string('name');
            $table->string('city');
            $table->string('country');
            $table->integer('runways')->nullable();  // Optional, number of runways
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('airport');
    }
};
