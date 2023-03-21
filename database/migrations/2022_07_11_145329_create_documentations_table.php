<?php

use App\Models\Response;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentations', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('url');
            $table->string('method');
            // $table->foreignId('parameter_id');
            // $table->foreignId('response_id');
            // $table->foreignIdFor(\App\Models\Parameter::class);
            // $table->foreignIdFor(\App\Models\Response::class);
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
        //
    }
}
