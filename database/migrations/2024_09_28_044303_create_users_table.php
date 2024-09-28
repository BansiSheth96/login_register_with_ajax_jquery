<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->index()->comment('AUTO_INCREMENT');
            $table->string('name');
            $table->string('surname');
            $table->string('email')->unique();
            $table->string('phonenumber');
            $table->string('address');
            $table->string('pincode');
            $table->unsignedInteger('state')->index()->nullable();
            $table->foreign('state')->references('id')->on('states');
            $table->unsignedInteger('city')->index()->nullable();
            $table->foreign('city')->references('id')->on('cities');
            $table->string('password');  
            $table->timestamps();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
