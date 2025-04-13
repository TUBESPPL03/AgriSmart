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
        Schema::table('plant_growths', function (Blueprint $table) {
            // Menambahkan nilai default untuk kolom predicted_harvest
            $table->date('predicted_harvest')->default(now())->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('plant_growths', function (Blueprint $table) {
            // Mengembalikan kolom predicted_harvest ke nullable tanpa default value
            $table->date('predicted_harvest')->nullable()->change();
        });
    }
};
