<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PlantGrowth;

class PlantGrowthSeeder extends Seeder
{
    public function run()
    {
        // Menambahkan data tanaman Tomat
        PlantGrowth::create([
            'plant_type' => 'Tomat',
            'activity_history' => 'Disiram setiap hari',
            'photo' => 'images/tomat.jpg', // Pastikan path gambar sudah benar
            'predicted_harvest' => '2025-04-15'
        ]);

        // Menambahkan data tanaman Cabai
        PlantGrowth::create([
            'plant_type' => 'Cabai',
            'activity_history' => 'Dipupuk seminggu sekali',
            'photo' => 'images/cabai.jpg',
            'predicted_harvest' => '2025-05-10'
        ]);
    }
}
