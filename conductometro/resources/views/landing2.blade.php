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

    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <!-- Icon Font Css -->
    <link rel="stylesheet" href="plugins/icofont/icofont.min.css">
    <!-- Slick Slider  CSS -->
    <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <style>
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

    </style>

</head>

<body>
    <header>
        @include('components.application-navbar')

    </header>
    <div>
        <div class="container-fluid" style="background-image: url('/images/driving.jpeg');">
            <section class="banner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-xl-7">
                            <div class="block" style="background-color: rgba(255, 235, 205, 0.171)">
                                <div class="divider mb-3"></div>
                                <span class="text-uppercase text-sm letter-spacing ">Bem-vindo à pagina Web da </span>
                                <h1 class="mb-3 mt-3">Escola de Condução Lagoense</h1>

                                <p class="mb-4 pr-5">Fundada em 2000, ao longo destes anos alcançou um grande
                                    prestígio profissional no ensino de condução. O nosso objetivo é formar condutores,
                                    responsáveis e confiantes. </p>
                                <div class="btn-container text-center">
                                    <a href="#contactenos" class="btn btn-warning">Contacte-nos <i
                                            class="icofont-simple-right ml-2  "></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="features">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="feature-block d-lg-flex">
                                <div class="feature-item mb-5 mb-lg-0">
                                    <div class="feature-icon mb-4">
                                        <i style="background-image: url('/images/intothevoid.jpeg')"></i>
                                    </div>

                                    <h3 class="mb-3">Os nossos serviços</h3>
                                    <div class="card">
                                        <p class="mb-4">
                                        <ul class="list-group list-group-flush">
                                            <span class="text-center">
                                                <h4 class="list-group-item">Formação para obtenção de
                                                    cartas de condução das categorias A1, A2, A e B</h4>, ou seja,
                                                motociclos e automóveis ligeiros
                                            </span>

                                            <br />

                                            <h4 class="list-group-item">Formação prática a
                                                condutores já encartados</h4>
                                            </li>
                                            <br />

                                            <details>
                                                <summary>
                                                    <h4 class="list-group-item"> Documentação
                                                        automobilistica </h4>
                                                    <summary>

                                                        <li>Revalidação de licenças de condução e cartas de condução
                                                        </li>
                                                        <li>Alterações de nome e/ou morada em licenças de condução e
                                                            cartas de
                                                            condução</li>
                                                        <li>Trocas de carta de condução estrangeira</li>
                                                        <li>2ª via ou Duplicado de livretes de veículos, licenças de
                                                            condução e
                                                            cartas de condução</li>
                                                        <li>Livretes/Titulos de Registo de propriedade: alterações de
                                                            nome,
                                                            morada, proprietário, de caracteristicas de veiculos,
                                                            cancelamentos/apreensões de matricula
                                                        </li>

                                        </ul>
                                        </details>
                                        </li>


                                        </ul>
                                        </p>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12 col-lg-4">
                                    <span class="feature-icon mb-4">
                                        <i class="icofont-ui-clock badge-warning"></i>
                                    </span>

                                    <h4 class="mb-4">Horários</h4>
                                    <ul class="w-hours list-unstyled">
                                        <li class="d-flex justify-content-between">Segunda - Sábado : <span>8:00 -
                                                17:00</span></li>
                                        <li class="d-flex justify-content-between">Thu - Fri : <span>9:00 - 17:00</span>
                                        </li>
                                        <li class="d-flex justify-content-between">Sat - sun : <span>10:00 -
                                                17:00</span></li>
                                    </ul>
                                </div>

                            </div>


                            <div class="overarching">
                                <section class="container">
                                    <div class="row" data-aos="fade-up">

                                        <div class="col-1 col-md-3">

                                        </div>
                                        <div class="col-10 col-md-6"
                                            style="border: rgba(0, 0, 0, 0.089) dashed 4px; background-color:rgba(255, 230, 0, 0.568);">

                                            <h2>Contacte-nos</h2>
                                            <div class="form-group" id="contactenos" data-aos="fade-down">
                                                <form>
                                                    <label for="nome">Nome:</label>
                                                    <input class="form-control" type="text" name="nome">
                                                    <label for="email">Email:</label>
                                                    <input class="form-control" type="text" name="telefone">
                                                    <label for="email">Telefone/Telemóvel:</label>
                                                    <input class="form-control" type="text" name="telefone">
                                                    <label for="textarea">Mensagem</label>
                                                    <textarea placeholder="Escreva aqui a sua mensagem..."
                                                        class="form-control"></textarea>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="desejamarketing">
                                                        <label class="form-check-label" for="desejamarketing">Desejo
                                                            receber materiais de
                                                            marketing</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="politicaprivacidade" required>
                                                        <label class="form-check-label" for="exampleCheck1">
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



                        </div>
                        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
                        <script>
                            AOS.init();
                        </script>
</body>

</html>
