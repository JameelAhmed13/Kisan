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
        Schema::create('privileges', function (Blueprint $table) {
            $table->id('privilegeID');
            $table->foreignId('moduleID')->constrained('modules','moduleID');
            $table->foreignId('accessLevelID')->constrained('accessLevel','accessLevelID');
            $table->string('privilegeCode');
            $table->string('privilegeName');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('privileges');
    }
};
