<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePregnantmomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pregnantmoms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('age');
            $table->text('address');
            $table->string('anak_ke');
            $table->string('hpht');
            $table->string('hpl');
            $table->string('pregnant_age');
            $table->string('lila');
            $table->string('weight');
            $table->string('blood_pressure');
            $table->string('tfu');
            $table->string('djj');
            $table->string('immunization_tt');
            $table->text('description');
            $table->text('complaint');
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
        Schema::dropIfExists('pregnantmoms');
    }
}
