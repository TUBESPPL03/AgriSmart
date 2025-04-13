<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpertiseController;

Route::get('/', [ExpertiseController::class, 'index']); // Redirect beranda ke index

Route::resource('expertises', ExpertiseController::class);


