<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JidokwanController;
use App\Models\Custom_user;

Route::get('/',[JidokwanController::class,'vistaprincipal']);

Route::get('/login',[JidokwanController::class,'getlogin']);

Route::get('/cexamen',[JidokwanController::class,'crearexamen']);

Route::get('/cclase',[JidokwanController::class,'crearclase']);

/*Route::get('/admin', function () {
    return view('Admin/InicioAdmin');
});

Route :: get('/alumno/avisos', function () {
    return view('Alumno.avisos');
});

Route :: get('/formulrio', function () {
    return view('form');
});*/

