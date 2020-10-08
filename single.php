<?php get_header() ?>

<main>
    <!-- Presentation -->
    <section class="presentation">
        <div class="single_conteneur">
            <div class="texte">
                <h1><?php the_title() ?></h1>
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



<?php wp_footer() ?>
</body>

</html>