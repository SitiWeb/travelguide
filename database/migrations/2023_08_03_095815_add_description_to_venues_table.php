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
            $table->text('description')->nullable()->after('title');
            // Replace 'text' with the data type that suits your description field (e.g., 'string', 'text', 'longText', etc.)
            // Use 'nullable()' if the description column is optional (can be NULL)
            // Use 'after()' to specify the position of the new column (after the 'title' column in this case)
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
            $table->dropColumn('description');
        });
    }
};
