<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Cadastre-se!</title>
        <link rel="icon" type="image/x-icon" href="iconepr.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        @vite('resources/css/Paciente/paciente.css')
    </head>
    <body>
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Cadastre-se!</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <form method="GET" action="{{ route('cadastro') }}" id="contactForm">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="nomepac" placeholder="Digite seu nome" type="text" name="nomepac" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="emailpac" placeholder="Digite seu email" type="email" name="emailpac" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="telefonepac" placeholder="Digite seu telefone" type="tel" name="telefonepac" required>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" id="datapac" placeholder="Digite a data de nascimento" type="date" name="datapac" required>
                            </div>                            <br><br>
                            <input class="btn btn-primary btn-xl text-uppercase" type="submit" name="submit" id="submit" value="cadastrar">                             <a href="{{ route('Inicio') }}"><input class="btn btn-primary btn-xl text-uppercase" type="button" value="voltar"></a>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <input class="form-control" id="CPFpac" placeholder="Digite seu CPF" type="number" name="CPFpac" required><br>

                            <div class="form-group form-group-textarea mb-md-0">
                                <input class="form-control" id="senhapac" placeholder="Digite sua senha" type="password" name="senhapac" required><br>

                            <div class="form-group form-group-textarea mb-md-0">
                                <input class="form-control" id="CEPpac" placeholder="Digite seu CEP" type="number" name="CEPpac" required><br>

                            <div class="form-group form-group-textarea mb-md-0">
                                <input class="form-control" id="bairropac" placeholder="Digite seu bairro" type="text" name="bairropac" required><br><br>
                            <!-- <button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Cadastrar</button> -->
                            </div>
                        </div>    
                    </div>
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