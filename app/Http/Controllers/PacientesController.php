<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Paciente;

class PacientesController extends  Controller
{
    public function index() {
        $paciente = Paciente::all();
        $argumentos = array();
        $argumentos['pacientes'] = $paciente;
        return view("pacientes.index", $argumentos);
    }


    public function create() {
        return view('pacientes.create');
    }

    public function store(Request $request){
        $nuevoPaciente = new Paciente();
        $nuevoPaciente-> nombre_paciente = $request->input('nombre_paciente');
        $nuevoPaciente-> edad_paciente = $request->input('edad_paciente');
        $nuevoPaciente-> sexo_paciente = $request->input('sexo_paciente');
        $nuevoPaciente-> peso_paciente = $request->input('peso_paciente');
        $nuevoPaciente-> descripcion = $request->input('descripcion');
        $nuevoPaciente-> evidence = $request->input('evidence');
    
    if ($request ->file('evidence')){

        $path_evidence=
        $request->file('evidence')->store('public/evidences');

        if($path_evidence){
            $nuevoPaciente->evidence =
            $request->file('evidence')-> HashName();
        }
    }

    if ($nuevoPaciente->save()) {
        return redirect()->route('pacientes.index') ->with('exito', 'paciente creado con exito');;
        ;
    }
    return redirect()->route('pacientes.create');

    }

    public function edit($id) {
        $paciente = Paciente::find($id);

        if ($paciente){
            $argumentos = array();
            $argumentos['paciente'] = $paciente;
            return view('paciente.edit', $argumentos);
        }
        return redirect()->route('paciente.index')->with('error', 'No existe el paciente');
    }

    public function update($id, Request $request) {
        $paciente = Paciente::Find($id);
        if ($paciente){
            $paciente-> nombre_paciente = $request->input('nombre_paciente');
            $paciente-> edad_paciente = $request->input('edad_paciente');
            $paciente-> sexo_paciente = $request->input('sexo_paciente');
            $paciente-> peso_paciente = $request->input('peso_paciente');
        ;

            if ($request->file('evidencia')) {
                $path_evidence = $request->file('evidencia')->store('public/evidencia');
                if ($path_evidence) {
                    $paciente->foto = $request->file('evidencia')->hashName();
                }
            }

            if ($paciente->save()) {
                return redirect()->route('pacientes.index', $paciente->id)->with('exito', 'Se actualizo  el paciente');
            }

            return edirect()->route('pacientes.edit', $paciente->id)->with('error', 'Error al actualizar');
        }

        return redirect()->route('pacientes.index')->with('error', 'No existe el paciente');
    }

    public function destroy($id) {
        $paciente = Paciente::find($id);
        if ($paciente) {
            if($paciente->delete()) {
                return redirect()->route('pacientes.index')->with('exito', 'paciente eliminado');
            }
            return redirect()->route('pacientes.index')->with('error', 'No se encontro al paciente');
        }
        return redirect()->route('pacientes.index')->with('error', 'No se encontro al paciente');
    }
}


