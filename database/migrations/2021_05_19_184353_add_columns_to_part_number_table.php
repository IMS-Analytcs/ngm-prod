<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToPartNumberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('part_number', function (Blueprint $table) {
            $table->float('ipmJunior')->nullable();
            $table->float('ipmPleno')->nullable();
            $table->float('ipmSenior')->nullable();
            $table->float('ipmMaster')->nullable();
            $table->float('valor')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('part_number', function (Blueprint $table) {
            $table->dropColumn('ipmJunior');
            $table->dropColumn('ipmPleno');
            $table->dropColumn('ipmSenior');
            $table->dropColumn('ipmMaster');
            $table->dropColumn('valor');
        });
    }
}
