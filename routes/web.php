<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/login', function () {
    return view('InicioSesion');
});

Route::get('/admin', function () {
    return view('InicioAdmin');
});

Route :: get('/alumno/avisos', function () {
    return view('Alumno.avisos');
});
