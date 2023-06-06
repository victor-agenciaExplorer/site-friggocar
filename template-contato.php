<?php require('partials/header.php'); ?>

<?php require('components/menu.php'); ?>

<section class="internal-banner">
    <div class="container text-center text-lg-start">
        <div class="banner-internal-content-wrapper offset-lg-1">
            <ul class="breadcrumb d-flex justify-content-center justify-content-lg-start gap-1">
                <li><a href="/">Página inicial</a></li>
                <li><a href="pages/template-contato.php">Contato</a></li>
            </ul>

            <h1 class="title">
                Contato
            </h1>
        </div>
    </div>
</section>

<main id="contact" class="contact">
    <section id="contactForm" class="container my-5 col-lg-5">
        <h2 class="title mb-5">
            Tem interesse em algum dos nossos produtos ou serviços?
        </h2>

        <?php require('components/form.php'); ?>
    </section>
    
    <?php require('components/contatos.php'); ?>

    <?php require('components/maps.php'); ?>
</main>

<?php require('components/rodape.php'); ?>

<?php require('partials/footer.php'); ?>