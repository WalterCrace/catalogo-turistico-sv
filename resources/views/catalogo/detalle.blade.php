<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $lugar['titulo'] }} - Detalles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <a href="{{ route('catalogo.index') }}" class="btn btn-secondary mb-4">Volver al Catálogo</a>
        
        <div class="row">
            <div class="col-md-7 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h2 class="card-title">{{ $lugar['titulo'] }}</h2>
                        <h5 class="text-muted">{{ $lugar['departamento'] }} | {{ $lugar['categoria'] }}</h5>
                        <hr>
                        <p class="card-text fs-5 mt-4">{{ $lugar['descripcion'] }}</p>
                        
                        <div class="alert alert-success mt-4">
                            <strong>Precios:</strong> {{ $lugar['precio'] }}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sección del Formulario de Contacto -->
            <div class="col-md-5 mb-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-dark text-white">
                        <h5 class="mb-0">Solicitar más información</h5>
                    </div>
                    <div class="card-body">
                        <form action="#" method="GET">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Tu Nombre</label>
                                <input type="text" class="form-control" id="nombre" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="mensaje" class="form-label">Mensaje o Dudas</label>
                                <textarea class="form-control" id="mensaje" rows="4" required>Me gustaría recibir más información sobre mi posible visita a {{ $lugar['titulo'] }}.</textarea>
                            </div>
                            <button type="submit" class="btn btn-success w-100">Enviar Solicitud</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>