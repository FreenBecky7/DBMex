<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Correo de contacto</title>
</head>
<body>
    <h1>¡Has recibido un correo de contacto!</h1><br>
    <p><strong>Nombre: </strong>{{ $data['name'] }}</p><br>
    <p><strong>Correo: </strong>{{ $data['email'] }}</p><br>
    <p><strong>Télefono: </strong>{{ $data['phone'] }}</p><br>
    <p><strong>Mensaje: </strong>{{ $data['description'] }}</p><br>
</body>
</html>