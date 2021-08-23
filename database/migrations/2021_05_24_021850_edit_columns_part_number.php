<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditColumnsPartNumber extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('part_number', function (Blueprint $table) {

            $table->renameColumn('hora', 'hora_analista');
            $table->string('hora_ipm')->null();
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

            $table->dropColumn('hora_analista');
            $table->dropColumn('hora_ipm');
        });
    }
}
