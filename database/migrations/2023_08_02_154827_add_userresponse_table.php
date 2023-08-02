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
        Schema::create('userresponses', function (Blueprint $table) {
            $table->id();
            $table->json('userresponse');
            $table->ipAddress('ip');
            $table->timestamp('submitted_time')->nullable();
            $table->string('destination');
            $table->integer('rating')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userresponses');
    }
};
