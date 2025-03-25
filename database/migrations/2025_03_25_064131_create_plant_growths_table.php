<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('plant_growth', function (Blueprint $table) {
            $table->id();
            $table->string('plant_type');
            $table->text('activity_history');
            $table->string('photo');
            $table->date('harvest_time'); // Kolom waktu panen
            $table->timestamps();
        });
    }
    
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plant_growths');
    }
};
