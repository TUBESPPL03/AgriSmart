<?php

use App\Http\Controllers\PlantGrowthController;
use Illuminate\Support\Facades\Route;

Route::get('/plant-growth', [PlantGrowthController::class, 'index'])->name('plant_growth.index');
Route::get('/plant-growth/create', [PlantGrowthController::class, 'create'])->name('plant_growth.create');
Route::post('/plant-growth', [PlantGrowthController::class, 'store'])->name('plant_growth.store');

