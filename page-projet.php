<?php get_header() ?>

<main>
    <!-- Presentation -->
    <section class="presentation">
    <div class="conteneur" id="page-projet-conteneur">
        <h1 class="page-projet-title">Mes Projets</h1>
    </div>
    </section>


    <!-- Projet -->
    <section class="projet">

        <div class="conteneur flex">
            <?php get_template_part('parts/content', 'projet') ?>
        </div>
    </section>

</main>

<?php get_footer() ?>