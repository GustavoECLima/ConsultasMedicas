<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Agendamento</title>
        <link rel="icon" type="image/x-icon" href="iconepr.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        @vite('resources/css/Agendamento/agendamento.css')
    </head>
    <body>
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Agende sua consulta!</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <form method="POST" action="agendamento.php" id="contactForm">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="nomeag" value="cu" type="text" name="nomeag" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="dataag" type="date" name="dataag" required>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" id="horaag" type="time" name="horaag" required>
                            </div><br>
                            <div class="form-group form-group-textarea mb-md-0">
                                <input class="form-control" id="exameag" placeholder="Digite seus sintomas" type="text" name="exameag" required>
                            </div>
                                                        
                            <br><br>
                        </div>
                        <div class="col-md-6">
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
                        </div>                        
                    </div>
                    <input class="btn btn-primary" type="submit" name="submit" id="submit" value="Agendar Consulta">
                </form>
            </div>
        </section>

        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; MedPrime 2023</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>