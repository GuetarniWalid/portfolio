<?php get_header() ?>

<main>

    <!-- Presentation -->
    <section class="presentation">
        <div class="single_conteneur">
            <h1 class="contact-title"><?php single_tag_title() ?></h1>
        </div>
    </section>

    <!-- Get tag -->
    <?php
    $url = $_SERVER['REQUEST_URI'];
    $urlCut = explode("/", $url);
    $tag = $urlCut[count($urlCut) - 2];
    ?>


    <!-- Projet -->
    <?php get_template_part('parts/content', 'tag-projet') ?>





    <!-- Blog -->
    <?php get_template_part('parts/content', 'tag-blog') ?>


</main>

<?php get_footer() ?>