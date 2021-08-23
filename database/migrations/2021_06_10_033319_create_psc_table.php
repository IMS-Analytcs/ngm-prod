<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePscTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psc', function (Blueprint $table) {

            $table->id();
            $table->integer('lead');
            $table->text('motivo');
            $table->string('pre_venda');
            $table->string('email');
            $table->date('data_final');
            $table->text('concorrente');
            $table->text('escopo');
            $table->text('justificativa');

            $table->unsignedBigInteger('quote_id');
            $table->foreign('quote_id')->references('id')->on('quotes');

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
        Schema::dropIfExists('psc');
    }
}
