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
    return view('Alumno.avisos');
});

Route :: get('/formulrio', function () {
    return view('form');
});