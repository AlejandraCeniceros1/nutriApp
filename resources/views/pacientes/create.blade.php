<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Paciente</title>
</head>
<body>
    <h1> Registrar Paciente </h1>
    <a href="{{route('pacientes.index')}}">Regresar</a>

    <form method="POST" action="{{route('pacientes.store')}}" enctype="multipart/form-data">
        @csrf
        <div>
            <label>Nombre</label>
            <input type="text" name="nombre_paciente" id="nombre_paciente">
        </div>
        <div>
            <label>Edad</label>
            <textarea rows="5" name="edad_paciente" id="edad_paciente"></textarea>
        </div>
        <div>
            <label>Sexo</label>
            <input type="text" name="sexo_paciente" id="sexo_paciente">
        </div>
        <div>
            <label>Peso</label>
            <input type="text" name="peso_paciente" id="peso_paciente">
        </div>
            <label>Description</label>
            <textarea name="description" id="description" rows="5"></textarea>
        </div>
        <div>
            <label> Evidence </label>
            <input type="file" name="evidence" id="evidence"></button>
        </div>
        <div>
            <button type="submit">Create</button>
        </div>
    </form>
</body>
</html>