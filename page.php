<?php get_header() ?>

<main>
    <!-- Presentation -->
    <section class="presentation">
        <div class="conteneur">
            <div class="photo">
                <?php if (get_the_title()) : ?>
                    <h1><?php the_title() ?></h1>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- blogs -->
    <section id="single_section">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_post_thumbnail('xlarge', ['class' => 'single_img']) ?>
                <div class="single_section_content">
                    <?php the_content() ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>
</main>

<?php get_footer() ?>