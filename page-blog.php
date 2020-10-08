<?php get_header() ?>

<main>
    <!-- Presentation -->
    <section class="presentation">
        <?php if (get_field('titre')) : ?>
            <div class="conteneur" id="page-blog-conteneur">
                <div class="photo">
                    <?php the_post_thumbnail('thumbnail') ?>
                </div>
                <div class="texte">
                    <h1><?php the_field('titre') ?> <?php the_sub_field('prenom'); ?></h1>
                    <p><?php the_field('description') ?></p>
                </div>
            </div>
        <?php endif; ?>
    </section>


    <!-- blogs -->
    <section class="blogs" id="page-blogs-section">
        <div class="two-column conteneur flex">
            <?php get_template_part('parts/content', 'blog') ?>
        </div>
    </section>
</main>

<?php get_footer() ?>