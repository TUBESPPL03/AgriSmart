<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth_controller;
use App\Http\Controllers\article_controller;

Route::get('/login', [auth_controller::class, 'getLogin'])->name('login');
Route::get('/register/farmer', [auth_controller::class, 'getRegister']);
Route::get('/register/expert', [auth_controller::class, 'getRegisterExpert']);
Route::get('/role', [auth_controller::class, 'getSelectRole'])->name('select_role');


Route::get('/article/create', [article_controller::class, 'getCreate']);
Route::post('/article/create/post', [article_controller::class, 'postCreate']);

Route::post('/register/farmer/post', [auth_controller::class, 'postRegisterFarmer']);
Route::post('/register/expert/post', [auth_controller::class, 'postRegisterExpert']);
