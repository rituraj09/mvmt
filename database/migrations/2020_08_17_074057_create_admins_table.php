<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',300);
            $table->string('mobile',30);
            $table->string('email',200)->nullable();
            $table->string('password');
            $table->string('mobile_otp',28)->nullable();
            $table->boolean('mobile_verified')->default(0); 
            $table->timestamp('mobile_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP')); 
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
        Schema::drop('admins');
    }
}
