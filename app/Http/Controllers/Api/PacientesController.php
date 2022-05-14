<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PacientesController extends Controller
{
    public function index() {
        $pacientes = Paciente::select('id', 'nombre_paciente', 'edad_paciente')->get();
        return $pacientes;
    }

    public function show($id) {
        $paciente = Paciente::select('id', 'sexo_paciente', 'peso_paciente', 'evidence')->where('id', $id)->first();
        return $pacientes;
    }
}
