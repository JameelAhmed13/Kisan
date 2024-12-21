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
        Schema::create('rolePrivilege', function (Blueprint $table) {
            $table->foreignId('roleID')->constrained('roles','roleID');
            $table->foreignId('privilegeID')->constrained('privileges','privilegeID');
            $table->primary(['roleID','privilegeID']);
            $table->timestamp('dateCreated')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rolePrivilege');
    }
};
