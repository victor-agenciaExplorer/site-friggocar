<?php require('partials/header.php'); ?>

<title>Sobre a Friggocar</title>
<meta name="description" content="A Friggocar é uma empresa no ramo de baús / carrocerias frigoríficas com placa eutética, utilizados em todo o segmento de transporte de congelados em geral, como sorvetes, pães, carnes, gelo e está localizada estrategicamente na cidade de Itupeva, no interior do estado de São Paulo, devido à proximi.">
</head>

<body>

    <?php require('components/menu.php'); ?>

    <main id="who-we-are">
        <section class="internal-banner">
            <div class="container text-center text-lg-start">
                <div class="banner-internal-content-wrapper offset-lg-1">
                    <ul class="breadcrumb d-flex justify-content-center justify-content-lg-start gap-1">
                        <li><a href="/">Página inicial</a></li>
                        <li><a href="pages/quem-somos.php">Quem somos</a></li>
                    </ul>

                    <h1 class="title">
                        Quem somos
                    </h1>
                </div>
            </div>
        </section>

        <section class="container-lg pt-5 mt-4">
            <div class="row justify-content-lg-between">
                <div class="col-lg-6 justify-content-center d-flex d-lg-block order-lg-first">
                    <img src="assets/images/friggocar.jpg" alt="" class="img-fluid px-4 px-lg-0">
                </div>

                <div class="py-5 px-5 px-lg-0 py-lg-0 col-lg-5">
                    <h2 class="title--align-left mb-3">Quem somos</h2>
                    <p class="text my-4">
                        A Friggocar é uma empresa de origem italiana, com mais de 10 anos de
                        experiência no mercado brasileiro em fabricação de baús frigoríficos e de placas eutéticas.
                        <br>
                        <br>
                        Nosso compromisso é garantir investimentos constantes em tecnologias e modernização de processos
                        e tecnologias para garantir uma alta eficiência térmica no transporte de produtos gelados e
                        supergelados.
                        <br>
                        <br>
                        Oferecemos um atendimento personalizado desde a criação do projeto até a assistência técnica.
                    </p>

                    <a href="carrocerias-frigorificas.php" role="button" class="btn base-button">Conheça nossas Carrocerias</a>
                </div>
            </div>
        </section>

        <section class="container-lg pt-5 mt-4">
            <div class="row justify-content-lg-between">
                <div class="col-lg-6 justify-content-center d-flex d-lg-block order-lg-last">
                    <img src="assets/images/friggocar-2.jpg" alt="" class="img-fluid px-4 px-lg-0">
                </div>

                <div class="py-5 px-5 px-lg-0 py-lg-0 col-lg-5">
                    <h3 class="title--align-left mb-3">A nossa missão, visão e valores</h3>
                    <p class="text my-4">
                        A Friggocar é uma empresa de origem italiana, com mais de 10 anos de
                        experiência no mercado brasileiro em fabricação de baús frigoríficos e de placas eutéticas.
                        <br>
                        <br>
                        Nosso compromisso é garantir investimentos constantes em tecnologias e modernização de processos
                        e tecnologias para garantir uma alta eficiência térmica no transporte de produtos gelados e
                        supergelados.
                        <br>
                        <br>
                        Oferecemos um atendimento personalizado desde a criação do projeto até a assistência técnica.
                    </p>
                </div>
            </div>
        </section>

        <section class="container-lg d-lg-flex flex-lg-column py-4 my-4">
            <h4 class="title--gallery mb-2 mb-lg-5">nossos produtos</h4>

            <div class="carousel-gallery row row-cols-lg-3 justify-content-center gx-lg-4">
                <div class="col gallery-item d-flex justify-content-center">
                    <img src="assets/images/gallery-1.jpg" alt="" class="img-fluid">
                </div>

                <div class="col gallery-item d-flex justify-content-center">
                    <img src="assets/images/gallery-2.jpg" alt="" class="img-fluid">
                </div>

                <div class="col gallery-item d-flex justify-content-center">
                    <img src="assets/images/gallery-3.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </section>

        <section id="contactForm" class="container py-5 col-lg-6">
            <h2 class="title mb-5">
                Fale conosco
            </h2>

            <?php require('components/form.php') ?>
        </section>
    </main>

    <?php require('components/rodape.php'); ?>

    <?php require('partials/footer.php'); ?>