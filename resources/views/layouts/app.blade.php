<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestor de Tareas</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-4">
        <a class="navbar-brand" href="{{ route('tareas.index') }}">Gestor de Tareas</a>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>