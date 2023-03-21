<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nik')->unique()->nullable();
            $table->enum('gender', ['Laki-Laki', 'Perempuan']);
            $table->date('birth_date');
            $table->text('address');
            $table->string('profession');
            $table->enum('study', ['Tidak Sekolah','SD', 'SMP', 'SMA', 'Perguruan Tinggi']);
            $table->string('bpjs_number')->nullable();
            $table->string('phone_number')->nullable();
            $table->text('allergy')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('patients');
    }
}
