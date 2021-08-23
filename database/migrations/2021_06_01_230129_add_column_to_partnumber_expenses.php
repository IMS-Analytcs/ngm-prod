<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToPartnumberExpenses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('partnumber_expenses', function (Blueprint $table) {
            $table->enum('type', ['anl', 'ipm']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('partnumber_expenses', function (Blueprint $table) {
            Schema::dropIfExists('type');
        });
    }
}
