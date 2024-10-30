<?php

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

Route :: get('/alumno/avisos', function () {
    return view('Alumnos.Avisos');
});
Route :: get('/alumno/grupos', function () {
    return view('Alumnos.Grupos');
});

Route :: get('/alumno/finanzas', function () {
    return view('Alumnos.Finanzas');
});