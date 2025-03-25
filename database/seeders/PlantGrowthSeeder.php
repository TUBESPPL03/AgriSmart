<?php

use Illuminate\Database\Seeder;
use App\Models\PlantGrowth;

class PlantGrowthSeeder extends Seeder
{
    public function run()
    {
        PlantGrowth::create([
            'plant_type' => 'Tomat',
            'activity_history' => 'Disiram setiap hari',
            'photo' => 'images/tomat.jpg', // Sesuaikan path dengan penyimpanan gambar
            'predicted_harvest' => '2025-04-15'
        ]);

        PlantGrowth::create([
            'plant_type' => 'Cabai',
            'activity_history' => 'Dipupuk seminggu sekali',
            'photo' => 'images/cabai.jpg',
            'predicted_harvest' => '2025-05-10'
        ]);
    }
}

