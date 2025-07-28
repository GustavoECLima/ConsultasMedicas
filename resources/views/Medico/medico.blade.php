<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Cadastre-se!</title>
        <link rel="icon" type="image/x-icon" href="iconepr.ico" />
        @vite('resources/css/Medico/medico.css')
    </head>
    <body>
        <style>
            .escondido {
            display: none;
            }
        </style>
        <div class="container">
            <h2>Informe seus dados!</h2>
        </div>

        <form method="POST" action="{{ route('Medico_Cadastro_ROTA') }}" id="contactForm">
            @csrf
            <input id="nomemed" placeholder="Digite seu nome" type="text" name="nomemed" required>
            
            <input id="senhamed" placeholder="Digite sua senha" type="password" name="senhamed" required>
            
            <select name="especializacaomed" required>
                <option value="">Escolha a Especialização</option>
                @foreach ($especializacoes as $esp)
                    <option value="{{ $esp }}">{{ $esp }}</option>
                @endforeach
            </select>

            <input type="text" id="caixaOutro" name="altismo" class="escondido" placeholder="Digite outra opção">

            <script>
                document.getElementById('altismo').addEventListener('change', function(){
                    var outroInput = document.getElementById("caixaOutro");
                    if (this.value === 'outro') {
                        outroInput.classList.remove("escondido");
                        outroInput.required = true;
                    } else {
                        outroInput.classList.add("escondido");
                        outroInput.required = false;
                        outroInput.value = '';
                    }
                });
            </script>

            <input type="submit" name="submit" id="submit" value="cadastrar"> <a href="{{ route('Medico_Login_VIEW') }}"><input type="button" value="voltar"></a>

        </form>
    </body>
</html>