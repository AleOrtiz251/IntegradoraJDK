<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Models\CustomUser;
use App\Http\Controllers\Controller;

class JidokwanController extends Controller
{
    public function vistaprincipal(){
        return view('inicio');
    }

    public function getlogin(){
        // $User = CustomUser::all();
        return view('InicioSesion');
    }

    public function crearexamen(){
        return view('CrearExamen');
    }

    public function crearclase(){
        return view('CrearClase');
    }
}
