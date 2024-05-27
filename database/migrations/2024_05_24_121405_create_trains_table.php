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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('company',150);
            $table->string('departure_station',150);
            $table->string('arrival_station',150);
            $table->dateTime('departure_time', precision: 0);
            $table->dateTime('arrival_time', precision: 0);
            $table->integer('train_code');
            $table->unsignedSmallInteger('number_of_carriages');
            $table->boolean('on_time');
            $table->boolean('cancelled');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
