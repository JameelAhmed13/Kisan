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
        Schema::create('uc', function (Blueprint $table) {
            $table->id('ucID');
            $table->string('name');
            $table->foreignId('tehsilID')->constrained('tehsil', 'tehsilID');
            $table->string('status')->nullable();
            $table->dateTime('deleted_at')->nullable();
            $table->timestamp("created_at")->nullable();
            $table->timestamp("update_at")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uc');
    }
};
