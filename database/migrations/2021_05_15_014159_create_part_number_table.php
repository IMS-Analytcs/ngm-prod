<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartNumberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('part_number', function (Blueprint $table) {
            $table->id();
            $table->string('typePartNumber');
            $table->string('nameParNumber');
            $table->string('sow');
            $table->string('bu1');
            $table->string('bu2');
            $table->integer('status')->nullable()->default(1);
            $table->string('servico')->nullable();
            $table->string('unidade')->nullable();
            $table->string('modalidade')->nullable();
            $table->string('horasQuantidade')->nullable();
            $table->string('descricao')->nullable();
            $table->string('servicoISE')->nullable();
            $table->string('hora')->nullable();
            $table->string('ipm')->nullable();

            $table->float('analistaJunior')->nullable();
            $table->float('analistaPleno')->nullable();
            $table->float('analistaSenior')->nullable();
            $table->float('analistaMaster')->nullable();

            $table->unsignedBigInteger('manufacturers_id')->nullable();
            $table->foreign('manufacturers_id')->references('id')->on('manufacturers');

            $table->unsignedBigInteger('groups_id')->nullable();
            $table->foreign('groups_id')->references('id')->on('groups');

            $table->unsignedBigInteger('familia_id')->nullable();
            $table->foreign('familia_id')->references('id')->on('familia');

            $table->unsignedBigInteger('tipo_id')->nullable();
            $table->foreign('tipo_id')->references('id')->on('tipo');
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
        Schema::dropIfExists('part_number');
    }
}
