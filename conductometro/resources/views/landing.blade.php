<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Escola de Condução Lagoense</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">

    </script>

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />


    <link rel="stylesheet" href="plugins/icofont/icofont.min.css">


    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <link href="css/styles.css" rel="stylesheet" />





    <style>
        body {
            overflow-x: hidden;
        }

        .btn:hover {
            box-shadow: 5px -2px 5px rgba(0, 0, 0, 0.692);
            color: rgb(255, 255, 255);
            transition: 0.6s;
            opacity: 0.9;

        }

        .overarching {
            background-image: url("/images/frota.jpeg");
            background-repeat: no-repeat;
            background-size: cover;
        }

        a {
            text-decoration: none;
            color: white;

        }

        a:hover {
            color: #f8d300;


        }

        ul {
            list-style: none
        }

        /* width */
        ::-webkit-scrollbar {
            width: 7px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px rgb(255, 238, 0);
            border-radius: 10px;
        }

        ::-webkit-scrollbar-track:hover {
            box-shadow: inset 0 0 5px #f8d300;
            border-radius: 10px;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #f8d300;
            border-radius: 10px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #000000;
        }

    </style>

</head>

<body style="background-image: url('/images/driving.jpeg');">

    <header>
        @include('components.application-navbar')

    </header>
    <!--primeira Div -->


    <!--Servicos -->
    <section class="page-section" id="services"
        style="background: rgb(7,14,7);
    background: linear-gradient(184deg, rgba(7,14,7,1) 0%, rgba(91,109,149,0.47522759103641454) 100%, rgba(92,110,150,1) 100%);">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase text-white">Os nossos serviços</h2>
                <h3 class="section-subheading text-muted">O nosso objetivo é formar condutores, responsáveis e
                    confiantes.</h3>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-warning"></i>
                        <i class="fas fa-road fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3 text-white">Formação prática</h4>
                    <p class="text-light ">Aos nossos instruendos ou a<strong> condutores já encartados</strong></p>
                </div>
                <div class="col-md-4 " data-aos="flip-down">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-warning"></i>
                        <i class="fas fa-book fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3 text-white">Formação</h4>
                    <p class="text-light">Obtenção de cartas de condução das categorias A1, A2, A e B, ou seja,
                        <strong>motociclos e automóveis ligeiros</strong> (com facilidades de pagamento)
                    </p>
                </div>
                <div class="col-md-4" data-aos="fade-down">

                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-warning"></i>
                        <i class="fas fas fa-id-card-alt fa-stack-1x fa-inverse"></i>
                    </span>

                    <h4 class="my-3 text-white">Documentação automobilistica</h4>
                    <script>
                        function desem() {

                            document.getElementById("desem").classList.remove('collapse');

                            document.getElementById("desem").classList.add('collapse.show');



                        }

                        function menos() {

                            document.getElementById("desem").classList.remove('collapse.show');

                            document.getElementById("desem").classList.add('collapse');
                            $("#desem").load(window.location.href + " #desem");

                        }
                    </script>

                    <p class="text-light ">Revalidação de licenças de condução e cartas de condução e <button
                            class="badge btn-warning" onclick="desem()" id="botaomais"> mais... </button>

                </div>
                <div class="row">
                    <ul class="collapse text-light" id="desem">
                        <hr>


                        <li>Alterações de nome e/ou morada em licenças de condução e cartas de condução</li>
                        <hr>
                        <li>Trocas de carta de condução estrangeira</li>
                        <hr>
                        <li>2ª via ou Duplicado de livretes de veículos, licenças de condução e cartas de condução</li>
                        <hr>
                        <li>Livretes/Titulos de Registo de propriedade:<ul> <br>
                                <li>Alterações de nome, morada, proprietário, de caracteristicas de veiculos,
                                    cancelamentos/apreensões de matricula</li>
                                <ul>
                                    <hr>

                                    <li> <button class="badge btn-warning" onclick="menos()" id="botaomenos"> menos...
                                        </button></li>

                                </ul>
                </div>

            </div>
        </div>
        </p>
        </div>
        </div>
    </section>
    <!--  Aqui esta a outra seccao de cronlogia-->
    <section>


    </section>
    <!--  Aqui termina seccao de cronlogia-->




    <svg class="footer-frame" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
        viewBox="0 0 1920 79">
        <defs>
            <style>
                .cls-2 {
                    fill: #f8d300;
                }

            </style>
        </defs>
        <title>footer-frame</title>
        <path class="cls-2"
            d="M0,72.427C143,12.138,255.5,4.577,328.644,7.943c147.721,6.8,183.881,60.242,320.83,53.737,143-6.793,167.826-68.128,293-60.9,109.095,6.3,115.68,54.364,225.251,57.319,113.58,3.064,138.8-47.711,251.189-41.8,104.012,5.474,109.713,50.4,197.369,46.572,89.549-3.91,124.375-52.563,227.622-50.155A338.646,338.646,0,0,1,1920,23.467V79.75H0V72.427Z"
            transform="translate(0 -0.188)" />
    </svg>
    <div class="overarching">
        <section class="container">
            <div class="row" data-aos="fade-up">

                <div class="col-1 col-md-3">

                </div>
                <div class="col-10 col-md-6 mt-5 mb-4"
                    style="border: rgba(0, 0, 0, 0.089) dashed 4px; background-color:rgba(255, 230, 0, 0.568);">
                    <i class="fas fa-envelope-open-text"></i>
                    <h2 class="display-3 text-light" style="">Contacte-nos</h2>
                    <div class="form-group" id="contactenos" data-aos="fade-down">
                        <form method="POST" enctype="application/x-www-form-urlencoded" action="/submit/contact-form">
                            @csrf
                            <label for="nome">Nome:</label>
                            <input class="form-control text-center " type="text" name="nome">

                            <label for="email">Email:</label>
                            <input class="form-control text-center" type="text" name="email">

                            <label for="telefone">Telefone/Telemóvel:</label>
                            <input class="form-control text-center form-control-sm" type="text" name="telefone">

                            <label for="mensagem">Mensagem</label>
                            <textarea name="mensagem" placeholder="Escreva aqui a sua mensagem..."
                                class="form-control"></textarea>

                            <div class="form-check">
                                <label class="form-check-label" for="desejamarketing">Desejo
                                    receber materiais de
                                    marketing</label>
                                <input type="checkbox" class="form-check-input" name="desejamarketing">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="politicaprivacidade" required>
                                <label class="form-check-label" for="politicaprivacidade">
                                    Li e concordo com a <a href="">política de
                                        privacidade</a></label>
                            </div>


                            <button type="submit" class="btn btn-warning">Enviar</button>
                    </div>
                </div>
                </form>
                <div class="col-1 col-md-3">

                </div>




        </section>
    </div>
    <!--Fin de seccion -->
    <div class="container-fluid" style=" padding:0px;">
        <div class="row">
            <div class="col-12" data-aos="zoom-out-down">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d764.1650281358046!2d-8.447233170778825!3d37.130946998742594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5400a75e188aa98d!2zMzfCsDA3JzUxLjQiTiA4wrAyNic0OC4xIlc!5e1!3m2!1sca!2spt!4v1637749346175!5m2!1sca!2spt"
                    width="100%" height="140%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

    </div>
    <!-- Footer-->
    <br><br><br>
    <footer>



        <div class="footer" style="background: rgb(70,67,0);
    background: linear-gradient(0deg, rgba(70,67,0,0.8981967787114846) 14%, rgba(113,111,1,0) 100%);color:white;">
            <div class=" container">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <svg class="iconeinformacao" id="svg" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" width="20" viewBox="0, 0, 400,430.7692307692308">
                            <g id="svg">
                                <path id="path0"
                                    d="M295.891 25.321 C 277.246 35.166,273.773 53.240,288.194 65.374 C 311.816 85.251,360.839 73.986,360.839 48.682 C 360.839 25.154,322.394 11.326,295.891 25.321 M261.091 99.983 L 235.470 100.903 218.450 124.328 C 172.537 187.521,91.863 234.965,30.322 234.965 L 13.986 234.965 13.986 253.077 L 13.986 271.189 21.678 269.942 C 25.909 269.257,38.811 267.263,50.350 265.511 C 74.692 261.816,115.362 249.381,141.586 237.615 L 159.872 229.411 154.388 238.482 C 106.538 317.632,91.194 350.418,93.005 369.644 C 101.036 454.944,255.726 436.730,351.267 339.234 C 380.265 309.642,383.227 303.561,383.181 273.703 L 383.146 250.350 374.876 266.657 C 337.695 339.972,230.181 401.064,196.902 367.786 C 185.896 356.779,186.934 354.557,271.626 207.877 C 303.830 152.102,330.918 104.540,331.822 102.185 C 333.563 97.647,329.598 97.524,261.091 99.983 "
                                    stroke="none" fill="#FFFFFF" fill-rule="evenodd"></path>
                            </g>
                        </svg>
                        <div class="footer-col first">
                            Dispomos de um ensino que assenta nas mais recentes tecnologias por isso temos uma sala de
                            código virtual e um sistema de testes multimédia. A nossa frota automóvel é moderna e de
                            qualidade de forma a satisfazer o nosso cliente, para mais informações entre em contacto,
                            connosco.
                        </div>
                    </div> <!-- end of col -->
                    <div class="col-md-4 text-center">
                        <div class="footer-col middle">
                            <h4>Siga-nos nas nossas Redes Sociais</h4>
                            <a href="https://www.facebook.com/eclagoense16" target="blank"> <i
                                    style=" width: 5%; height: auto; " class="fab fa-facebook"></i> Facebook </a>
                            <ul class="list-unstyled li-space-lg p-small">
                                <li class="media">

                                    <div class="media-body"> <i class="fas fa-globe"></i><a class="white"
                                            href="https://www.escoladeconducaolagoense.pt/">www.escoladeconducaolagoense.pt/</a>
                                    </div>
                                </li>
                                <li class="media">

                                    <div class="media-body">Leia os nossos <a class="white"
                                            href="terms-conditions.html">Termos e condições</a>, <a
                                            class="white" href="privacy-policy.html">Política de
                                            Privacidade</a></div>
                                </li>
                            </ul>

                        </div>
                    </div> <!-- end of col -->
                    <div class="col-md-4">
                        <div class="footer-col last">
                            <h4 class="text-center">Os nossos endereços:</h4>
                            <ul class="list-unstyled li-space-lg p-small">
                                <li class="media">
                                    <address>
                                        <i class="fas fa-map-marker-alt"></i>

                                        <div class="media-body">Parque Empresarial Algarve Lote 3-r/c 8400-431
                                            Lagoa-Algarve LAGOA Portugal</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-envelope"></i>
                                    <div class="media-body"><a class="white"
                                            href="mailto:lagoenseec@hotmail.com">lagoenseec@hotmail.com</a> </div>
                                    </address>
                                </li>
                            </ul>
                        </div>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of footer -->
        <!-- end of footer -->


    </footer>


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
