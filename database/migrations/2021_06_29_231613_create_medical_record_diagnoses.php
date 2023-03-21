<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalRecordDiagnoses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_record_diagnoses', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\MedicalRecord::class);
            $table->foreignIdFor(\App\Models\Diagnosis::class);
            $table->text("description")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medical_record_diagnoses');
    }
}
