<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar datos del paciente</title>
</head>
<body>
    <h1>Editar paciente </h1>
    <a href="{{route('pacientes.index')}}">Regresar</a>
    <form method="POST" action="{{route('pacientes.update', $paciente->id)}}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div>
        <label>Nombre</label>
            <input type="text" name="nombre_paciente" id="nombre_paciente" value="{{$paciente->nombre_paciente}}">
        </div>
        <div>
        <label>Edad</label>
            <textarea rows="5" name="edad_paciente" id="edad_paciente" value="{{$paciente->edad_paciente}}">
        </div>
        <div>
        <label>Sexo</label>
            <input type="text" name="sexo_paciente" id="sexo_paciente" value="{{$paciente->sexo_paciente}}"></input>
        </div>
        <div>
        <label>Peso</label>
            <input type="text" name="peso_paciente" id="peso_paciente" value="{{$paciente->peso_paciente}}"></input>
        </div>
        <div>
            <label>evidencia</label>
            <input type="file" name="evidence" id="evidence" value="{{$paciente->evidence}}">
        </div>
        <div>
            <button type="submit">Actualizar</button>
        </div>
    </form>
</body>
</html>