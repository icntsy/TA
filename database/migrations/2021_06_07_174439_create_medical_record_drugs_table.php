<?php

use App\Models\Drug;
use App\Models\MedicalRecord;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalRecordDrugsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_record_drugs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(MedicalRecord::class);
            $table->foreignIdFor(Drug::class);
            $table->integer('quantity')->default(0);
            $table->string('instruction');
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
        Schema::dropIfExists('medical_record_drugs');
    }
}
