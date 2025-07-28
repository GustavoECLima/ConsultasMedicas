<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Cadastre-se!</title>
        <link rel="icon" type="image/x-icon" href="iconepr.ico"/>
        @vite('resources/css/Paciente/paciente.css')
    </head>

        <section>
            <h2>Cadastre-se!</h2>

            <form method="POST" action="{{ route('Paciente_Cadastro_ROTA') }}" id="contactForm">
            @csrf
                <input id="nomepac" placeholder="Digite seu nome" type="text" name="nomepac" required><br>

                <input id="emailpac" placeholder="Digite seu email" type="email" name="emailpac" required><br>

                <input id="senhapac" placeholder="Digite sua senha" type="password" name="senhapac" required><br>
                
                <input type="submit" name="submit" id="submit" value="cadastrar">                             
                
                <a href="{{ route('Inicio_VIEW') }}"> <input type="button" value="voltar"> </a>
            
            </form>
            
        </section>
    </body>
</html>