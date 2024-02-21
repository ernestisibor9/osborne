<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountOpeningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_openings', function (Blueprint $table) {
            $table->id(); 
            $table->string('first_name');  
            $table->string('last_name');  
            $table->string('middle_name');  
            $table->string('email');                     
            $table->string('phone')->nullable();                     
            $table->string('marital_status')->nullable();           
            $table->date('dob')->nullable();  
            $table->date('wedding_anniversary')->nullable();  
            $table->string('nationality')->nullable();            
            $table->string('nationality_status')->nullable();
            $table->string('state_of_origin')->nullable();
            $table->string('mother_name')->nullable();           
            $table->string('passport')->nullable();           
            $table->string('proof_identity')->nullable();         
            $table->string('residence_address')->nullable();       
            $table->string('proof_address')->nullable();       
            $table->string('permanent_address')->nullable();       
            $table->string('bank_name')->nullable();          
            $table->string('account_no')->nullable();         
            $table->string('bvn')->nullable();   
            $table->string('nin')->nullable();   
            $table->boolean('acct_approve')->default(false)->nullable();
            $table->string('nextOfKin_name')->nullable();          
            $table->string('nextOfKin_phone')->nullable();        
            $table->string('nextOfKin_address')->nullable();           
            $table->string('signature')->nullable();              
            $table->string('declaration')->nullable();         
            $table->string('gender')->nullable();                  
            $table->string('cscs_no')->nullable();            
            $table->string('nextOfKinRelationship')->nullable();
            $table->string('nextOfKinEmail')->nullable();
            $table->string('political_exposure');
            $table->string('employer_name')->nullable(); 
            $table->string('employer_address')->nullable();
            $table->string('position_in_organization')->nullable(); 
            $table->string('self_employed')->nullable();                  
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
        Schema::dropIfExists('account_openings');
    }
}
