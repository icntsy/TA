<?php

use App\Models\Patient;
use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQueuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('queues', function (Blueprint $table) {
            $table->id();
            $table->string("queue_number");
            $table->boolean("has_check")->default(false);
            $table->boolean("has_drug")->default(false);
            $table->foreignIdFor(User::class, "doctor_id");
            $table->text("main_complaint")->nullable();
            $table->foreignIdFor(Patient::class);
            $table->foreignIdFor(Service::class);
            $table->foreignIdFor(\App\Models\MedicalRecord::class)->nullable();
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
        Schema::dropIfExists('queues');
    }
}
