<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Agendamento</title>
        <link rel="icon" type="image/x-icon" href="iconepr.ico" />
        @vite('resources/css/Agendamento/agendamento.css')
    </head>
    <body>
        <section class="page-section" id="contact">
            <h2 class="section-heading text-uppercase">Agende sua consulta!</h2>
            <form method="POST" action="agendamento.php" id="contactForm">
                <input class="form-control" id="nomeag" value="cu" type="text" name="nomeag" required>

                    <input class="form-control" id="dataag" type="date" name="dataag" required>

                    <input class="form-control" id="horaag" type="time" name="horaag" required>
                
                    @foreach ($especializacoes as $esp)
                        <option value="">{{ $esp }}</option>
                    @endforeach

                    <input class="form-control" id="exameag" placeholder="Digite seus sintomas" type="text" name="exameag" required>

                <label class="tabela" for="medico">
                <p>Medicos disponiveis</p>
                    <?php
                        // $query = "SELECT * FROM medico";

                        // // $pegar = array("SELECT precomedico FROM medico")

                        // // sort($pegar, SORT_NUMERIC);

                        // // foreach($pegar as $query)

                        // $result = mysqli_query($conexao, $query);

                        // echo "<table class='tabela' cellpadding='20' border='1'";
                        //     echo "<thead>";
                        //         echo "<th> CODIGO MÉDICO </th> <th> NOME MÉDICO </th> <th> PRECO CONSULTA </th> <th> ESPECIALIZACAO MEDICO </th> <th> ENDERECO DE ATENDIMENTO </th> <th> LOCAL DE ATENDIMENTO </th> <th> SELECIONAR MÉDICO </th>";
                        //     echo "</thead>";
                        //     echo "<tbody>";
                        //         while ($row = mysqli_fetch_array($result)) {
                        //             echo "<tr>";

                        //                 echo "<td>".$row['idmedico']."  </td>  <td>".$row['nomemedico']."  </td> <td>".$row['precomedico'] ." </td> <td>".$row['especializacaomedico']."  </td> <td>".$row['localmedico']."  </td> <td>".$row['clinicamedico']."  </td>   <td> <input type='radio' value=".$row['idmedico']." name='marcar' id='marcar'> </td>";

                        //             echo "</tr>";
                        //         }
                        //     echo "</tbody>";    
                        // echo "</table><br><br>";
                        // mysqli_close($conexao);

                    ?>
                </label>

                <input class="btn btn-primary" type="submit" name="submit" id="submit" value="Agendar Consulta">
            </form>
        </section>
    </body>
</html>