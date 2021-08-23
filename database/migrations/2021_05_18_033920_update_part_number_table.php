<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePartNumberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('part_number', function (Blueprint $table) {
            $table->dropColumn('bu1');
            $table->dropColumn('bu2');

            $table->unsignedBigInteger('bu1_id')->nullable();
            $table->foreign('bu1_id')->references('id')->on('bus');

            $table->unsignedBigInteger('bu2_id')->nullable();
            $table->foreign('bu2_id')->references('id')->on('bus');

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