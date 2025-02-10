<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mostrar Inscripción</title>
</head>
<body>
<h1>Detalles de la inscripción</h1>
<ul>
    <li>Nombre: {{ $usuarios->nombre }}</li>
    <li>Apellidos: {{ $usuarios->apellidos }}</li>
    <li>DNI: {{ $usuarios->dni }}</li>
    <li>Teléfono: {{ $usuarios->telefono }}</li>
</ul>
<a href="{{ route('usuarios.index') }}">Volver al listado</a>
</body>
</html>
