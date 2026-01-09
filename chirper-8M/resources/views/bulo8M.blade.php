<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Prueba</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
        }
        .info {
            margin: 20px 0;
            padding: 15px;
            background-color: #e3f2fd;
            border-left: 4px solid #2196f3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Página de Prueba - Chirper 8M</h1>
        
        <div class="info">
            <p><strong>Fecha:</strong> {{ now()->format('d/m/Y H:i:s') }}</p>
            <p><strong>Entorno:</strong> {{ config('app.env') }}</p>
        </div>

        <h2>Funcionalidad Blade</h2>
        <ul>
            @for ($i = 1; $i <= 5; $i++)
                <lli>Item {{ $i }}</li>
            @endfor
        </ul>

        <p>Esta es una página de prueba funcionando correctamente.</p>
    </div>
</body>
</html>