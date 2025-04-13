<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlantGrowth extends Model
{
    use HasFactory;

    // Menentukan kolom-kolom yang dapat diisi secara massal
    protected $fillable = [
        'plant_type',
        'activity_history',
        'photo',
        'harvest_time',
        'predicted_harvest'  // Menambahkan kolom predicted_harvest
    ];
    
    // Menentukan kolom tanggal yang harus diperlakukan sebagai instance Carbon
    protected $dates = ['harvest_time', 'predicted_harvest'];  // Menambahkan predicted_harvest pada kolom tanggal
}
