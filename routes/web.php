<?php

use App\Http\Controllers\AlumnoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JidokwanController;
use App\Models\CustomUser;


Route::get('/',[JidokwanController::class,'vistaprincipal']);

Route::get('/login',[JidokwanController::class,'getlogin']);

Route::get('/cexamen',[JidokwanController::class,'crearexamen']);

Route::get('/cclase',[JidokwanController::class,'crearclase']);


