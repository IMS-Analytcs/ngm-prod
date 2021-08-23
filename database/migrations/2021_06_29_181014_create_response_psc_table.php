<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponsePscTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('response_psc', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('psc_id');
            $table->text("response");
            $table->timestamps();

            $table->foreign('psc_id')->references('id')->on('psc');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('response_psc');
    }
}
