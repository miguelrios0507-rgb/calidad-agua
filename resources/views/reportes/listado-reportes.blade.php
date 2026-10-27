<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listado de Reportes de agua</h1>
    <table>
        <thead>
            <tr>
                <th>usuario_id</th>
                <th>ID</th>
                <th>Ubicación</th>
                <th>Descripción</th>
                <th>Fecha de inicio</th>
                <th>Folio</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reportes as $reporte)
                <tr>
                    <td>{{ $reporte->id }}</td>
                    <td>{{ $reporte->usuario_id }}</td>
                    <td>{{ $reporte->ubicacion }}</td>
                    <td>{{ $reporte->descripcion }}</td>
                    <td>{{ $reporte->fecha_inicio }}</td>
                    <td>{{ $reporte->folio }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>