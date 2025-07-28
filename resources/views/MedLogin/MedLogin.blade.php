<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login!</title>
        <link rel="icon" type="image/x-icon" href="iconepr.ico" />
    </head>
<body>
    <section>
        <h2>Login</h2>

        <form method="POST" action="{{ route('Medico_Login_ROTA') }}">
        @csrf

            <input id="nomemed" placeholder="Digite seu nome" type="text" name="nomemed" required>
            
            <input id="senhamed" placeholder="Digite sua senha" type="password" name="senhamed" required>
            
            <input type="submit" name="submit" id="submit" value="Logar"> 
            
            <a href="{{ route('Medico_Cadastro_VIEW') }}"> <input type="button" value="Cadastre-se"> </a> 
            
            <a href="{{ route('Inicio_VIEW') }}"> <input type="button" value="voltar"> </a>

        </form>
    </section>
</body>
</html>