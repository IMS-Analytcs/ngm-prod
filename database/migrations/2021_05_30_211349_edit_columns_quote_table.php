<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditColumnsQuoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::table('quotes', function (Blueprint $table) {
            $table->string('state')->nullable();
            $table->string('city')->nullable();

            $table->dropColumn('install_place');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('quotes', function (Blueprint $table) {

            $table->dropColumn('state');
            $table->dropColumn('city');
        });
      
    }
}
