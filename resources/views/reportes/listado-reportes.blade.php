<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mis reportes</title>
</head>
<body>
    <h1>Mis reportes</h1>
    <a href="{{ route('reportes.create') }}">Nuevo reporte</a>

    <table border="1" cellpadding="6">
        <tr>
            <th>Folio</th>
            <th>Ubicación</th>
            <th>Descripción</th>
            <th>Fecha inicio</th>
            <th>Acciones</th>
        </tr>
        @foreach ($reportes as $reporte)
            <tr>
                <td>{{ $reporte->folio }}</td>
                <td>{{ $reporte->ubicacion }}</td>
                <td>{{ $reporte->descripcion }}</td>
                <td>{{ $reporte->fecha_inicio }}</td>
                <td>
                    <a href="{{ route('reportes.edit', $reporte) }}">Editar</a>
                    <form action="{{ route('reportes.destroy', $reporte) }}" method="POST" style="display:inline"
                          onsubmit="return confirm('¿Eliminar este reporte?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>