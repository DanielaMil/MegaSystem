<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AplicacionController extends Controller
{
    public function Inicio(REQUEST $request)
    {
        return view('layouts/app');
    }

    public function Inicio2(REQUEST $request)
    {
        return view('Mantenedor/Registrar');
    }

    public function Matricula(REQUEST $request)
    {
        return view('Mantenedor/Matricula');
    }
}
