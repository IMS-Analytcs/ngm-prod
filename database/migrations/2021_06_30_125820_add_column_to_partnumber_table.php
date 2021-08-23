<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToPartnumberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('part_number', function (Blueprint $table) {
            $table->boolean('updated_sow')->default(false);
            $table->longText('sow')->change();
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
            $table->string('sow')->change();
            $table->dropColumn('updated_sow');
        });
    }
}