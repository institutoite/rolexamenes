{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   --}}

   <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Exámenes - Colegio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .welcome-section {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            background: linear-gradient(to bottom, #6c757d, #343a40);
            color: white;
        }
        .btn-custom {
            margin: 10px;
            padding: 15px 30px;
            border-radius: 25px;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="welcome-section">
        <h1>¡Bienvenido al Panel de Exámenes!</h1>
        <p class="mt-3">
            Aquí podrás consultar tus próximos exámenes, las materias correspondientes y los horarios asignados. 
            Accede con tu cuenta para comenzar.
        </p>

        <div class="mt-4">
            <a href="{{ route('login') }}" class="btn btn-primary btn-custom">Iniciar Sesión</a>
            <a href="{{ route('register') }}" class="btn btn-success btn-custom">Registrarse</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
