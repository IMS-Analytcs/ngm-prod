<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddColunmQuoteTable extends Migration
{

    public function up()
    {
        Schema::table('quotes', function (Blueprint $table) {
            $table->integer('id_origin')->default(0);//origem
            $table->integer('version')->default(0);
        });
    }


    public function down()
    {
        Schema::dropIfExists('quotes');
    }
}
