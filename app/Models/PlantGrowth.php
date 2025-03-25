<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlantGrowth extends Model
{
    use HasFactory;

    protected $fillable = [
        'plant_type',
        'activity_history',
        'photo',
        'harvest_time'
    ];
    

    protected $dates = ['harvest_time'];
}
