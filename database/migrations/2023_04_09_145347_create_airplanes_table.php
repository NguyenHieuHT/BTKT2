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
        Schema::create('airplanes', function (Blueprint $table) {
            $table->bigInteger('registration_number')->primary();

            $table->integer('model_number');
            $table->integer('capacity');
            $table ->boolean('is_deleted')->default(false);

            $table ->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('airplanes');
    }
};
