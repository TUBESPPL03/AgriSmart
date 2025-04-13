<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth_controller;
use App\Http\Controllers\article_controller;
use App\Http\Controllers\PlantGrowthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\OptimasiPertanianController;
use App\Http\Controllers\RencanaPanenController;
use App\Http\Controllers\ExpertiseController;

Route::get('/login', [auth_controller::class, 'getLogin'])->name('login');
Route::get('/register/farmer', [auth_controller::class, 'getRegister']);
Route::get('/register/expert', [auth_controller::class, 'getRegisterExpert']);
Route::get('/role', [auth_controller::class, 'getSelectRole'])->name('select_role');


Route::get('/article/create', [article_controller::class, 'getCreate']);
Route::post('/article/create/post', [article_controller::class, 'postCreate']);

Route::post('/register/farmer/post', [auth_controller::class, 'postRegisterFarmer']);
Route::post('/register/expert/post', [auth_controller::class, 'postRegisterExpert']);

// Rute untuk Beranda
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route untuk Fitur Monitoring
Route::get('/monitoring', [MonitoringController::class, 'index'])->name('monitoring.index');
Route::get('/monitoring/create', [MonitoringController::class, 'create'])->name('monitoring.create'); // ✅ Route untuk form input
Route::post('/monitoring', [MonitoringController::class, 'store'])->name('monitoring.store'); // ✅ Route untuk menyimpan data monitoring
Route::delete('/monitoring/{id}', [MonitoringController::class, 'destroy'])->name('monitoring.destroy'); // ✅ Route untuk menghapus data monitoring

// Rute untuk Optimasi Pertanian
Route::get('/optimasi-pertanian', [OptimasiPertanianController::class, 'index'])->name('optimasi.pertanian');

// Daftar route untuk fitur pertumbuhan tanaman
Route::get('/plant-growth', [PlantGrowthController::class, 'index'])->name('plant_growth.index');
Route::get('/plant-growth/create', [PlantGrowthController::class, 'create'])->name('plant_growth.create');
Route::post('/plant-growth', [PlantGrowthController::class, 'store'])->name('plant_growth.store');
Route::get('/plant-growth/{id}/edit', [PlantGrowthController::class, 'edit'])->name('plant_growth.edit');
Route::put('/plant-growth/{id}', [PlantGrowthController::class, 'update'])->name('plant_growth.update');
Route::delete('/plant-growth/{id}', [PlantGrowthController::class, 'destroy'])->name('plant_growth.destroy');

// Misalnya ini adalah rute untuk halaman rencana panen
Route::get('/rencana-panen', [RencanaPanenController::class, 'index'])->name('rencana.panen');


Route::get('/', [ExpertiseController::class, 'index']); // Redirect beranda ke index

Route::resource('expertises', ExpertiseController::class);


