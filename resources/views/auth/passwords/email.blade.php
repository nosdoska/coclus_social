<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Coclus - Iniciar sesión</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/layout.css') }}">
</head>
<body class="login">
    <a href="{{ url('/') }}"><img src="{{ asset('img/logo_coclus.png') }}"></a>
    <div class="vertical-form-box">
        <h2>Restablecer contraseña</h2>
        <form class="vertical-form" role="form" method="POST" action="{{ url('/password/email') }}">
            {{ csrf_field() }}
            <div>
                <input type="email" placeholder="Correo electrónico" class="vertical-form-input" name="email" value="{{ old('email') }}" id="email">
                @if ($errors->has('email'))
                    <span class="error-block">
                        {{ $errors->first('email') }}
                    </span>
                @endif
            </div>
            <input type="submit" value="Enviar link" class="btn-login vertical-form-input">
        </form>
        <a href="{{ url('/login') }}" class="login-forgot-link">¿Ya la recordaste?</a>
    </div>
</body>
</html>
