<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Nuevo Mensaje</p>
    <span>datos de contacto de la persona interesada en un servicio de bridge</span>
    <p>
        <img src="{{ $mensaje->embed(public_path() . '/img/BRIDGE-LOGO-COLOR.png') }}"
            alt="Image not Found" style="width: 250px;height: 150px;" />
    </p>
    <ul>
        <li>Nombre completo : {{$mensaje['nombre_completo']}}</li>
        <li>Telefono : {{$mensaje['telefono']}}</li>
        <li>Correo Electronico : {{$mensaje['Correo']}}</li>
        <li>Servicio Interesado : {{$mensaje['servicio']}}</li>
        <li>Mensaje o Asunto : {{$mensaje['Mensaje']}}</li>
    </ul>
    <p>Este mensaje es automatico por favor no responde</p>
</body>
</html>