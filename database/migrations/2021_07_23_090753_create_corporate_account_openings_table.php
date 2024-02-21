<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorporateAccountOpeningsTable extends Migration
{ 
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
        Schema::create('corporate_account_openings', function (Blueprint $table) {
            $table->id();
             $table->string('name');            
            $table->string('email');                     
            $table->string('phone')->nullable();                     
            $table->boolean('acct_approve')->default(false)->nullable();
            $table->string('csc_account')->nullable();           
            $table->date('incorporation_date')->nullable();                     
            $table->date('business_date')->nullable();            
            $table->string('reg_no')->nullable();            
            $table->string('address')->nullable();           
            $table->string('bank_name')->nullable();           
            $table->string('acct_no')->nullable();         
            $table->string('bvn')->nullable();       
            $table->string('board_resolution')->nullable();       
            $table->string('memorandum')->nullable();          
            $table->string('incorporation_cert')->nullable();         
            $table->string('director_particular')->nullable();                   
            $table->string('partnership_deed')->nullable();   
            $table->string('attorney_power')->nullable();          
            $table->string('approv_letter')->nullable();        
            $table->string('declaration');           
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
        Schema::dropIfExists('corporate_account_openings');
    }
}
