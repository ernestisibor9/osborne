<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGainersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gainers', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('ref_price');
            $table->string('past_close');
            $table->string('open');
            $table->string('high');
            $table->string('low');
            $table->string('close');
            $table->string('change');
            $table->string('chane_percentage');
            $table->string('volume');
            $table->string('value');
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
        Schema::dropIfExists('gainers');
    }
}
