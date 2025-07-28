<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Bem-vindo!</title>
        <link rel="icon" href="{{ asset('iconepr2.ico') }}" type="image/x-icon">
        @vite('resources/css/Inicio/telainicio.css')
    </head>
    <body>
        <a>MEDPRIME</a>
            <li><a href="{{ route('Paciente_Login_VIEW') }}">Login</a></li>
            <li><a href="{{ route('Medico_Login_VIEW') }}">Medico</a></li>
        
        <header>

            <h1>MEDPRIME</h1>
            <h2>"Conectando você ao cuidado médico que merece, quando e onde precisar."</h2>
            <a href="{{ route('Paciente_Cadastro_VIEW') }}">Cadastre-se!</a>

        </header>
    </body>
</html>
