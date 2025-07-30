<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use app\Models\Ride;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rides', function (Blueprint $table) {
            $table->id();
                $table->string('name', 255);
                $table->string('phone_number', 200);
                $table->string('gender', 1)->nullable();
                $table->string('pickup_location', 255);
                $table->string('dropoff_location', 255);
                $table->decimal('distance');
                $table->dateTime('pickup_time');
                $table->integer('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
