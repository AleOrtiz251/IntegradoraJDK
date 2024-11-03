<?php

use App\Http\Controllers\AlumnoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/login', function () {
    return view('InicioSesion');
});

Route::get('/admin', function () {
    return view('Admin/InicioAdmin');
});
Route :: get('/alumno/progresos', [AlumnoController:: class , 'progresos']);
Route :: get('/alumno/avisos', [AlumnoController:: class , 'avisos']);
Route :: get('/alumno/grupos', [AlumnoController:: class , 'grupos']);
Route :: get('/alumno/finanzas', [AlumnoController:: class , 'finanzas']);

Route :: get('/formulrio', function () {
    return view('form');
});
