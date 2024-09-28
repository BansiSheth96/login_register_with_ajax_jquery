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
        Schema::create('states', function (Blueprint $table) {
            $table->increments('id')->index()->comment('AUTO_INCREMENT');
            $table->string('name', 191)->nullable();
            $table->timestamps();
        });

        DB::table('states')->insert([
            ['name' => 'Andaman and Nicobar Islands', 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Andhra Pradesh', 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Arunachal Pradesh', 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Assam', 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Bihar', 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Chandigarh', 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Chhattisgarh', 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Dadra and Nagar Haveli', 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Daman and Diu', 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Delhi', 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Goa', 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Gujarat', 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Haryana', 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Himachal Pradesh', 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Jammu and Kashmir', 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Jharkhand', 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Karnataka', 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Kerala', 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Lakshadweep', 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Madhya Pradesh', 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Maharashtra', 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Manipur', 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Meghalaya', 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Mizoram', 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Nagaland', 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Odisha', 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Pondicherry', 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Punjab', 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Rajasthan', 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Sikkim', 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Tamil Nadu', 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Telangana', 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Tripura', 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Uttar Pradesh', 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'Uttarakhand', 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
            ['name' => 'West Bengal', 'created_at' => config('constants.calender.date_time'), 'updated_at' => config('constants.calender.date_time')],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('states');
    }
};
