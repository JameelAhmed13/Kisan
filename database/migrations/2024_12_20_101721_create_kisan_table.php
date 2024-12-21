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
        Schema::create('kisan', function (Blueprint $table) {
            $table->id('kisanID');
            $table->bigInteger('registrationID');
            $table->bigInteger('cnic');
            $table->string('cnicFront');
            $table->string('cnicBack');
            $table->string('name');
            $table->string('fatherName');
            $table->boolean('isNtn');
            $table->bigInteger('ntnNo');
            $table->string('ntnAttachment');
            $table->bigInteger('phoneNo');
            $table->bigInteger('mobileNo');
            $table->foreignId('provinceID')->constrained('province', 'provinceID');
            $table->foreignId('divisionID')->constrained('division', 'divisionID');
            $table->foreignId('districtID')->constrained('district', 'districtID');
            $table->foreignId('tehsilID')->constrained('tehsil', 'tehsilID');
            $table->foreignId('ucID')->constrained('uc', 'ucID');
            $table->bigInteger('registrationEntryNo'); //Q1
            $table->bigInteger('area'); //Q2
            $table->bigInteger('oliverDescription'); //Q3
            $table->bigInteger('distance'); //Q4
            $table->bigInteger('presentFarming'); //Q5
            $table->bigInteger('resourceFarming'); //Q6
            $table->bigInteger('nearSabziMandiDistance'); //Q7
            $table->string('landType'); //Q8
            $table->string('weather'); //Q9
            $table->string('waterDepth'); //Q10
            $table->string('farmingExperience'); //Q11
            $table->string('status'); //Q12

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kisan');
    }
};
