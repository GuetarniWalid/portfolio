<?php $query = new WP_Query(array(
    'post_type' => 'portfolio_blog',
    'tag' => $tag
));
if ($query->have_posts()) : ?>
    <section class="blogs">
        <h2 class="title-accueil" id="archive-blog-title-accueil">Blog avec : <?php single_tag_title() ?></h2>
        <div class="two-column conteneur flex">

            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <!-- blogs -->
                <article class="blogs-article">
                    <div class="img-card">
                        <?php the_post_thumbnail('medium', ['class' => 'blogs-image']) ?>
                        <a href="<?php the_permalink() ?>" class="grey-cover"></a>
                        <a href="<?php the_permalink() ?>" class="button">En savoir +</a>
                    </div>
                    <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                    <p class="date"><i class="far fa-clock"></i> <?php echo get_the_date() ?></p>
                    <?php the_excerpt() ?>
                    <?php the_tags('<ul><li>', '</li><li>', '</li></ul>'); ?>
                </article>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>


        <?php $the_query = new WP_Query(array(
            'pagename' => 'blog',
        )) ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <a href="<?php the_permalink() ?>" class="button-accueil">Voir tous les blogs</a>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    </section>
<?php endif; ?>