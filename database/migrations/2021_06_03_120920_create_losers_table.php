<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLosersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('losers', function (Blueprint $table) {
            $table->id();
            $table->string('board');
            $table->string('security');
            $table->string('ref_price');
            $table->string('open_price');
            $table->string('high_price');
            $table->string('low_price');
            $table->string('last_price');
            $table->string('close_price');
            $table->string('change_price');
            $table->string('change_percentage');
            $table->string('security_name');
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
        Schema::dropIfExists('losers');
    }
}
