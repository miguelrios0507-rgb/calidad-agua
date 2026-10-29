<<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar reporte</title>
</head>
<body>
    <h1>Editar reporte {{ $reporte->folio }}</h1>
    <form action="{{ route('reportes.update', $reporte) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="ubicacion">Ubicación:</label>
        <input type="text" id="ubicacion" name="ubicacion" value="{{ $reporte->ubicacion }}"><br><br>

        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion">{{ $reporte->descripcion }}</textarea><br><br>

        <label for="fecha_inicio">Fecha de inicio:</label>
        <input type="date" id="fecha_inicio" name="fecha_inicio" value="{{ $reporte->fecha_inicio }}"><br><br>

        <button type="submit">Guardar cambios</button>
    </form>
</body>
</html>