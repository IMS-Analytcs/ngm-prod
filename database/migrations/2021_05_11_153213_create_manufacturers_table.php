<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManufacturersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manufacturers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('typemanufacturer_id');
            $table->string('name');
            $table->string('abbreviation', 100);
            $table->string('partnership_level', 100); //nivel de parceria
            $table->text('detailing'); //detalhamento
            $table->date('contract_start'); //inicio do contrato
            $table->date('contract_end'); //fim do contrato
            $table->boolean('active')->default(1);
            $table->timestamps();

            $table->foreign('typemanufacturer_id')->references('id')->on('type_manufacturers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manufacturers');
    }
}
