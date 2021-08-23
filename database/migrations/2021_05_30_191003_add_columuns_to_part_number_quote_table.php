<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumunsToPartNumberQuoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('part_number_quote', function (Blueprint $table) {
            $table->float('unity_value')->nullable();
            $table->integer('quantity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('part_number_quote', function (Blueprint $table) {
            
            Schema::dropIfExists('unity_value');
            Schema::dropIfExists('quantity');
        });
    }
}
