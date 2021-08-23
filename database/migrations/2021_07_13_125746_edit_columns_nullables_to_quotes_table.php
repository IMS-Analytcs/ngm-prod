<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditColumnsNullablesToQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('quotes', function (Blueprint $table) {
            //

           
            $table->string('client_name')->nullable()->change();            
            $table->string('account_manager')->nullable()->change(); 
            $table->boolean('psc')->nullable()->change();
            $table->integer('id_origin')->default(0)->nullable()->change();
            $table->integer('version')->default(0)->nullable()->change();
            $table->string('owner')->nullable()->change();
            $table->date('final_date')->nullable()->change();
            $table->string('status_order')->default('Revisão')->nullable()->change();
            $table->float('initial_value')->nullable()->nullable()->change();
            $table->float('final_value')->nullable()->change();
            
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
            //
        });
    }
}
