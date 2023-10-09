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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('created_by');
            $table->timestamp('created_at')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('pic_name');
            $table->string('username');
            $table->string('email');
            $table->string('pic_phone_number');
            $table->unsignedBigInteger('country_id');
            $table->string('institution_name');
            $table->string('institution_email');
            $table->string('institution_type');
            $table->string('institution_logo');
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
