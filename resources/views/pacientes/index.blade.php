<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escuela</title>
</head>
<body>
    <h1>Consulta de Informacion de pacientes</h1>
    @if(Session::has('exito'))
        <p>{{Session::get('exito')}}</p>
    @endif
    @if(Session::has('error'))
        <p>{{Session::get('error')}}</p>
    @endif
    <a href="{{route('pacientes.create')}}">Nuevo Paciente</a>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Sexo</th>
                <th>Peso</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pacientes as $paciente)
                <tr>
                    <td>{{$paciente->nombre_paciente}}</td>
                    <td>{{$paciente->edad_paciente}}</td>
                    <td>{{$paciente->sexo_paciente}}</td>
                    <td>{{$paciente->peso_paciente}}</td>
                    <td>
                        <form method="post" action="{{ route('pacientes.destroy', $paciente->id) }}">
                            @csrf
                            @method('delete')
                            <a href="{{ route('pacientes.edit', $paciente->id) }}">Editar</a>
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>