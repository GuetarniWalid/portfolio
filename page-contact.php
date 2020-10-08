<?php get_header() ?>

<main>
    <!-- Bandeau du haut -->
    <section class="presentation">
        <div class="conteneur">
            <h1 class="contact-title"><?php the_title() ?></h1>
        </div>
    </section>


    <!-- Affichage texte -->
    <section class="competences">
        <div class="conteneur">
            <?php $query = new WP_Query(array(
                'page_id' => '8'
            )) ?>
            <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
                    <?php if (have_rows('footer')) : while (have_rows('footer')) : the_row() ?>
                            <?php if (have_rows('presentation')) : ?>
                                <?php while (have_rows('presentation')) : the_row(); ?>
                                    <?php
                                    $image = get_sub_field('photo');
                                    $url = $image['url'];
                                    $alt = $image['alt'];
                                    $size = 'thumb';
                                    $thumb = $image['sizes'][$size];
                                    ?>
                                    <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt);  ?>" class="contact-photo">
                                <?php endwhile; ?>
                            <?php endif; ?>
                        <?php endwhile; ?>

                    <?php endif; ?>

                <?php endwhile; ?>
            <?php endif; ?>


            <!-- Affichage logos -->
            <?php if (have_posts()) : while (have_posts()) : the_post() ?>
                    <div class="contact-conteneur">
                        <?php the_content(); ?>

                        <?php if (have_rows('resaux_1')) : ?>
                            <p class="reseau-title">You can also find me on the following channels</p>
                            <?php while (have_rows('resaux_1')) : the_row(); ?>
                                <a style="color: <?php the_sub_field('couleur') ?>" target="blank" href="<?php the_sub_field('lien') ?>"><?php the_sub_field('logo') ?></a>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <?php if (have_rows('resaux_2')) :  while (have_rows('resaux_2')) : the_row(); ?>
                                <a style="color: <?php the_sub_field('couleur') ?>" target="blank" href="<?php the_sub_field('lien') ?>"><?php the_sub_field('logo') ?></a>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <?php if (have_rows('resaux_3')) : while (have_rows('resaux_3')) : the_row(); ?>
                                <a style="color: <?php the_sub_field('couleur') ?>" target="blank" href="<?php the_sub_field('lien') ?>"><?php the_sub_field('logo') ?></a>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <?php if (have_rows('resaux_4')) : while (have_rows('resaux_4')) : the_row(); ?>
                                <a style="color: <?php the_sub_field('couleur') ?>" target="blank" href="<?php the_sub_field('lien') ?>"><?php the_sub_field('logo') ?></a>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <?php if (have_rows('resaux_5')) : while (have_rows('resaux_5')) : the_row(); ?>
                                <a style="color: <?php the_sub_field('couleur') ?>" target="blank" href="<?php the_sub_field('lien') ?>"><?php the_sub_field('logo') ?></a>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
                    </div>

        </div>
        </div>
    </section>
</main>



<?php wp_footer() ?>
</body>

</html>