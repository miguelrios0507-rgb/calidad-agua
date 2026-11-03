<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear reporte</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5" style="max-width: 600px;">
        <div class="card shadow-sm">
            <div class="card-body p-4">
                <h1 class="h3 mb-4">Crear reporte de agua</h1>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('reportes.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="ubicacion" class="form-label">Ubicación</label>
                        <input type="text" id="ubicacion" name="ubicacion"
                               class="form-control" value="{{ old('ubicacion') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea id="descripcion" name="descripcion" rows="4"
                                  class="form-control">{{ old('descripcion') }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="fecha_inicio" class="form-label">Fecha de inicio</label>
                        <input type="date" id="fecha_inicio" name="fecha_inicio"
                               class="form-control" value="{{ old('fecha_inicio') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="folio" class="form-label">Folio</label>
                        <input type="text" id="folio" name="folio"
                               class="form-control" value="{{ old('folio') }}">
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">Crear reporte</button>
                        <a href="{{ route('reportes.index') }}" class="btn btn-outline-secondary">Ver mis reportes</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>