<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo Contacto</title>
    <style>
        .title {
            text-align: center
        }

        .container {
            width: 85%;
            margin: auto;
            padding: 30px;
            color: rgb(0, 0, 0);
            background-color: rgb(243, 240, 237);
            border-radius: 30px;
        }

        p {
            padding: 5px;
        }

        .message {
            text-align: justify
        }

        .container-foo {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <h3 class="title">Nuevo Formulario de Contacto</h3>
    <div class="container">
        <p>De: <strong>{{ $data['name'] }}</strong></p>
        <p>Correo contacto: <strong>{{ $data['email'] }}</strong></p>
        <p>Asunto:</p>
        <div class="message">
            {{ $data['message'] }}
        </div>
        <p>Fecha: {{ $data['date'] }}</p>
    </div>

</body>

</html>
