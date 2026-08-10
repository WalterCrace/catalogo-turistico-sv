<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo Turístico - El Salvador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="text-center mb-5">Descubre El Salvador</h1>
        
        <div class="row">
            @foreach($lugares as $lugar)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $lugar['titulo'] }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $lugar['departamento'] }}</h6>
                        <p class="card-text mt-3">
                            <span class="badge bg-info text-dark">{{ $lugar['categoria'] }}</span>
                        </p>
                        <a href="{{ route('catalogo.show', $lugar['id']) }}" class="btn btn-primary w-100 mt-2">Ver Detalles</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>