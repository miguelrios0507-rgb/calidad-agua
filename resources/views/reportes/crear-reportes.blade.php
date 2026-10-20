<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Crear Reporte de agua</h1>
    <form action="{{ route('reportes.store') }}" method="POST">
        @csrf
    <label for="ubicacion">Ubicación:</label>
    <input type="text" id="ubicacion" name="ubicacion"><br><br>
    <label for="descripcion">Descripción:</label>
    <textarea id="descripcion" name="descripcion"></textarea><br><br>
    <label for="fecha_inicio">Fecha de inicio:</label>
    <input type="date" id="fecha_inicio" name="fecha_inicio"><br><br>
    <label for="folio">Folio:</label>
    <input type="text" id="folio" name="folio"><br><br>
    <button type="submit">Crear Reporte</button>  
</body>
</html>