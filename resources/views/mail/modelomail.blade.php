<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body onLoad="redireccionar()">
    <h1>Correo electronico</h1>
    <p> Este es un correo de solicitud de informacion de un cliente </p>
    <p><strong>Nombre:</strong>{{ $contacto ['nombre']}}</p>
    <p><strong>Telefono:</strong>{{ $contacto ['telefono']}}</p>
    <p><strong>Mensaje:</strong>{{ $contacto ['mensaje']}}</p>
    <p><strong>Fecha:</strong>{{ $contacto ['fecha']}}</p>
    <p><strong>Motivo:</strong>{{ $contacto ['motivo']}}</p>
    <p><strong>El cliente desea ser contactado por:</strong>{{ $contacto ['contactado']}}</p>
</body>
</html>
