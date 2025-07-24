<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Homepage</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../../images/fundo@.jpg" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
            type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        @vite('resources/css/Homepage/homepage.css')
    </head>

<body id="page-top">
<header class="masthead bg-primary text-white text-center">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg text-uppercase fixed-top" id="mainNav">
        <div class="local">
            <a class="navbar-brand">Bem-vindo!</a>
        </div>
    </nav>
    <!-- Masthead-->
        <div class="container d-flex align-items-center flex-column">
            <p class="masthead-heading mb-0">"Se deseja agendar uma nova consulta ou visualizar seu histórico, por
                favor, selecione a opção correspondente abaixo."</p>

        </div>

    </header>
    <!-- Portfolio Section-->
    <section class="page-section portfolio" id="portfolio">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
                    <div>
                    </div>
                    <h1 class="img-fluid">Ver consulta</h1>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                <div class="portfolio-item mx-auto">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"></div>
                    </div>

                </div>
                <h1 class="portfolio-item-caption-content">
                    <a class="img-fluid" href="{{ route('agd') }}">Agendar
                        consulta</a>
                </h1>
            </div>
        </div>
        </div>
    </section>
    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright &copy; MedPrime 2023</small></div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" aria-labelledby="portfolioModal4"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal"
                        aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class=" col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">CONSULTAS AGENDADAS</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5"/>
                                <!-- Portfolio Modal - Text-->


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

                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>