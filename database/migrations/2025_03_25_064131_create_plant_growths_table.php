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
        Schema::create('plant_growths', function (Blueprint $table) {
            $table->id();
            $table->string('plant_type');                // Jenis tanaman
            $table->text('activity_history');            // Riwayat aktivitas pertumbuhan
            $table->string('photo')->nullable();         // Foto tanaman
            $table->date('harvest_time')->nullable();    // Waktu panen (manual)
            $table->date('predicted_harvest')->nullable(); // Prediksi waktu panen (AI atau logic)
            $table->timestamps();                        // created_at dan updated_at
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
