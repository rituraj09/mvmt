<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('officials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',300);
            $table->string('user_name',100)->nullable();          
            $table->string('password',100)->nullable();  
            $table->integer('designation_id', false, true);  // FK DESIGNATION Table 
            $table->integer('organisation_id', false, true);    // FK Organisation Table 
            $table->integer('role_id', false, true);    // FK User Type Table 

            $table->string('email',200)->nullable();
            $table->string('email_otp',28)->nullable(); 
            $table->boolean('email_verified')->default(0); 
            $table->timestamp('email_verified_at')->nullable();

            $table->string('mobile',30)->nullable();
            $table->string('mobile_otp',28)->nullable();
            $table->boolean('mobile_verified')->default(0); 
            $table->timestamp('mobile_verified_at')->nullable();
            $table->rememberToken();
            $table->integer('created_by', false, true); 
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->integer('updated_by', false, true); 
            $table->timestamp('updated_at')->nullable();   
            $table->boolean('is_delete')->default(0); 
            $table->boolean('is_active')->default(1);  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('officials');
    }
}
