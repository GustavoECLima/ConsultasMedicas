<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Homepage</title>

        @vite('resources/css/Homepage/homepage.css')

        <style>
            .escondido {
            display: none;
            }
        </style>
    </head>

<body>
<header>

        <a class="navbar-brand">Bem-vindo!</a>

        <p>"Se deseja agendar uma nova consulta ou visualizar seu histórico, por
            favor, selecione a opção correspondente abaixo."</p>

    </header>
    <!-- Portfolio Section-->
    <section>
        <h1>Ver consulta</h1>
        
        <h1>
            <a href="{{ route('agd') }}">Agendar consulta</a>
        </h1>

    </section>

        <h2>CONSULTAS AGENDADAS</h2>

                                <!-- VERCONSULTAS


                                <?php
                                                                  
                                    // $query = "SELECT * FROM DetalhesConsulta where nomeconsulta='$paciente'";

                                    // $result = mysqli_query($conexao, $query);

                                    // echo "<table class='tb1' cellpadding='5' border=4";
                                    //     echo "<thead>";
                                    //         echo "<th> CODIGO CONSULTA </th> <th> NOME PACIENTE </th> <th> DATA CONSULTA </th> <th> HORA CONSULTA </th> <th> SINTOMAS </th> <th> MEDICO </th> <th> ESPECIALIZACAO </th><th> CLINICA </th><th> ENDERECO </th>";
                                    //     echo "</thead>";
                                    //     echo "<tbody>";
                                    //         while ($row = mysqli_fetch_array($result)) {
                                    //             echo "<tr>";
                                    //                 echo "<td>".$row['idconsulta']."  </td>  <td>".$row['nomeconsulta']."  </td> <td>".$row['dataconsulta'] ." </td> <td>".$row['horaconsulta']."  </td> <td>".$row['sintomasconsulta']."  </td> <td>".$row['nomemedico']."  </td> <td>".$row['especializacaomedico']."  </td> <td>".$row['clinicamedico']."  </td> <td>".$row['localmedico']."</td>";

                                    //             echo "</tr>";
                                    //         }
                                    //     echo "</tbody>";
                                    // echo "</table><br>";
                                    // mysqli_close($conexao);
                                ?>

<!-->

                <button onclick="mostrarTabela()">Clique aqui para ver a tabela</button>

                <table id="minhaTabela" class="escondido">
                <thead>
                    <tr>
                    <th>Nome</th>
                    <th>Idade</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($teste as $pac)
                    <tr>
                        <td>{{ $pac->nomepaciente }}</td>
                        <td>{{ $pac->senhapaciente }}</td>  
                    </tr>
                    @endforeach
                    <br>
                </tbody>
                </table>

                <script>
                function mostrarTabela() {
                    var tabela = document.getElementById("minhaTabela");
                    tabela.classList.toggle("escondido");
                }
                </script>

</body>

</html>