<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login!</title>
        <link rel="icon" type="image/x-icon" href="iconepr.ico" />

        @vite('resources/css/Login/login.css')
    </head>
<body>
    <section class="page-section" id="contact">
        <h2>Login</h2>

        <form method="POST" action="{{ route('Paciente_Login_ROTA') }}" id="contactForm">
        @csrf
            <input id="nome" placeholder="Digite seu nome" type="text" name="nome" required>

            <input id="senha" placeholder="Digite sua senha" type="password" name="senha" required>

            <input type="submit" name="submit" id="submit" value="logar">    
            <a href="{{ route('Inicio_VIEW') }}">
            <input type="button" value="voltar"></a>
        </form>
    </section>
</body>
</html>