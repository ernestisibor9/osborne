<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Dailymaketdata extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('dailymarketdata', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('loser');
            $table->string('gainer');
            $table->string('pricelist');
            $table->string('asi');
            $table->string('deal');
            $table->string('volume');
            $table->string('value');
            $table->string('market_cap');
            $table->string('bond_cap');
            $table->string('etf_cap');
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
       Schema::dropIfExists('dailymarketdata');
    }
}
