<footer id="footer">
    <div class="small-conteneur">
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
                                <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>">

                            <?php endwhile; ?>
                        <?php endif; ?>

                        <?php if (get_field('titre_footer')) : ?>
                            <h2><?php the_sub_field('titre') ?></h2>
                        <?php endif; ?>
                        <?php if (get_field('texte_footer')) : ?>
                            <p><?php the_sub_field('texte') ?></p>
                        <?php endif; ?>
                    <?php endwhile; ?>

                <?php endif; ?>

            <?php endwhile; ?>
        <?php endif; ?>


        <?php $the_query = new WP_Query(array(
            'pagename' => 'contact',
        )) ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <a href="<?php the_permalink() ?>" class="button-accueil">Contactez-moi</a>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    </div>
</footer>
<?php wp_footer() ?>
</body>

</html>