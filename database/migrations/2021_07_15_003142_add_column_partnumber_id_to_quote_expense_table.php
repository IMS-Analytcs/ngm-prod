<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnPartnumberIdToQuoteExpenseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('quote_expenses', function (Blueprint $table) {

            $table->unsignedBigInteger('partnumber_id')->nullable();
            $table->foreign('partnumber_id')->references('id')->on('part_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('quote_expenses', function (Blueprint $table) {
            $table->dropColumn(['partnumber_id']);
        });
    }
}
