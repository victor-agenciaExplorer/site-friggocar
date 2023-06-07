<?php require('partials/header.php'); ?>

<title>Friggocar - Placas Eutéticas</title>
<meta name="description" content="Só na Friggocar você conta com as placas eutéticas de melhor custo benefício do mercado a pronta entrega. Confira!">
</head>

<body>

    <?php require('components/menu.php'); ?>

    <main id="eutectic-plates">
        <section class="internal-banner">
            <div class="container text-center text-lg-start">
                <div class="banner-internal-content-wrapper offset-lg-1">
                    <ul class="breadcrumb d-flex justify-content-center justify-content-lg-start gap-1">
                        <li><a href="/">Página inicial</a></li>
                        <li><a href="pages/placas-euteticas.php">Placa Eutética</a></li>
                    </ul>

                    <h1 class="title">
                        placa eutética
                    </h1>
                </div>
            </div>
        </section>

        <section class="advantages d-flex flex-column flex-lg-row justify-content-center align-items-center gap-4">
            <div class="advantage d-flex align-items-center justify-content-center gap-2">
                <img src="assets/images/icon-1.svg" alt="" class="img-fluid">
                <p>
                    Placa eutética a pronta entrega
                </p>
            </div>

            <div class="advantage d-flex align-items-center justify-content-center gap-2">
                <img src="assets/images/icon-2.svg" alt="" class="img-fluid">
                <p>
                    Tecnologia nacional
                    a favor do seu negócio
                </p>
            </div>

            <div class="advantage d-flex align-items-center justify-content-center gap-2">
                <img src="assets/images/icon-3.svg" alt="" class="img-fluid">
                <p>
                    Produto desenvolvido em aço inoxidável
                </p>
            </div>
        </section>


        <section class="container-lg pt-5 mt-4">
            <div class="row justify-content-lg-between">
                <div class="col-lg-6 justify-content-center d-flex d-lg-block order-lg-last">
                    <img src="assets/images/plates.jpg" alt="" class="img-fluid">
                </div>

                <div class="py-5 py-lg-0 col-lg-5">
                    <h2 class="title--align-left mb-3">A importância da placa eutética para o setor sorveteiro</h2>
                    <p class="text my-4">
                        Essenciais para o sucesso do transporte dos seus sorvetes, as placas eutéticas são equipamentos
                        dedicados a manter a temperatura interna do baú dentro do nível ideal durante toda a jornada de
                        entregas.
                    </p>
                </div>
            </div>
        </section>

        <section class="container-lg pt-5 mt-4">
            <div class="row justify-content-lg-between">
                <div class="col-lg-6 justify-content-center d-flex d-lg-block">
                    <img src="assets/images/plates-2.jpg" alt="" class="img-fluid">
                </div>

                <div class="py-5 py-lg-0 col-lg-5">
                    <h3 class="title--align-left mb-3">Você só encontra na Friggocar</h3>
                    <ul class="custom-list ps-3">
                        <li>
                            <p>
                                Fabricação e tecnologia 100% nacional
                            </p>
                        </li>

                        <li>
                            <p>
                                Placa eutética a pronta entrega
                            </p>
                        </li>

                        <li>
                            <p>
                                Material à prova de corrosão
                            </p>
                        </li>

                        <li>
                            <p>
                                Alta eficiência térmica para um dia todo de entregas
                            </p>
                        </li>

                        <li>
                            <p>
                                1 ano de garantia e assistência técnica em todo o território nacional
                            </p>
                        </li>

                        <li>
                            <p>
                                Modernização constante
                            </p>
                        </li>
                    </ul>
                    <h4 class="title--align-left my-3">Especificações Técnicas</h4>
                    <div class="specifications">
                        <strong>
                            Material:
                        </strong>
                        <p>
                            aço-inox 304L e aço galvanizado
                        </p>

                        <strong>
                            Temperatura mínima:
                        </strong>
                        <p>
                            -40ºC
                        </p>

                        <strong>
                            Condição de funcionamento:
                        </strong>
                        <p>
                            -33ºC
                        </p>

                        <strong>
                            A prova de corrosão:
                        </strong>
                        <p>
                            Sim
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="container-lg d-lg-flex flex-lg-column py-4 my-4">
            <h4 class="title--gallery mb-2 mb-lg-5">Tecnologias exclusivas</h4>

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
                Fale com um especialista
            </h2>

            <?php require('components/form.php'); ?>
        </section>
    </main>

    <?php require('components/rodape.php'); ?>

    <?php require('partials/footer.php'); ?>