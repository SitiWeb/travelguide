<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('venues', function (Blueprint $table) {
            // Add the foreign key column
            $table->unsignedBigInteger('destination_id');

            // Add the foreign key constraint
            $table->foreign('destination_id')->references('id')->on('destinations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('venues', function (Blueprint $table) {
            // Drop the foreign key constraint and column
            $table->dropForeign(['destination_id']);
            $table->dropColumn('destination_id');
        });
    }
};
