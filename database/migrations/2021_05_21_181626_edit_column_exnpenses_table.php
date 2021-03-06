<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditColumnExnpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('expenses', function (Blueprint $table) {

            if (Schema::hasColumn('expenses', 'category')) //check the column
            {
                $table->dropColumn('category');
            }

            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('expenses_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('expenses', function (Blueprint $table) {

            $table->dropColumn('category_id');
        });
    }
}