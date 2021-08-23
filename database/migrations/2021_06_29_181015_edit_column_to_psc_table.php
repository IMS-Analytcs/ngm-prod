<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditColumnToPscTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('psc', function (Blueprint $table) {
            $table->unsignedBigInteger('status_psc_id');
            $table->foreign('status_psc_id')->references('id')->on('status_psc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('psc', function (Blueprint $table) {
            $table->dropColumn('status_psc_id');
        });
    }
}
