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
        Schema::create('cities', function (Blueprint $table) {
            $table->increments('id')->index()->comment('AUTO_INCREMENT');
            $table->string('name', 191)->nullable();
            $table->unsignedInteger('state_id')->index()->nullable();        
            $table->foreign('state_id')->references('id')->on('states');
            $table->timestamps();
        });

        DB::table('cities')->insert([
            ['name' => 'Port Blair', 'state_id' => 1, 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Visakhapatnam', 'state_id' => 2, 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Vijayawada', 'state_id' => 2, 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Itanagar', 'state_id' => 3, 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Guwahati', 'state_id' => 4, 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Silchar', 'state_id' => 4, 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Patna', 'state_id' => 5, 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Gaya', 'state_id' => 5, 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Chandigarh', 'state_id' => 6, 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Surat', 'state_id' => 12, 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Rajkot', 'state_id' => 12, 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Ahemdabad', 'state_id' => 12, 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Bharuch','state_id' => 12, 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Bangaluru','state_id' => 17, 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Mumbai', 'state_id' => 21, 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Pune', 'state_id' => 21, 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Nagpur', 'state_id' => 21, 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Nashik', 'state_id' => 21, 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};
