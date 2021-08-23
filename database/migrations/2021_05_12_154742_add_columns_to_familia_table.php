<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToFamiliaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('familia', function (Blueprint $table) {
            $table->unsignedBigInteger('manufecturer_id');
            $table->unsignedBigInteger('group_id');

            
            $table->foreign('manufecturer_id')->references('id')->on('manufacturers');
            $table->foreign('group_id')->references('id')->on('groups');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('familia', function (Blueprint $table) {
            //
        });
    }
}
