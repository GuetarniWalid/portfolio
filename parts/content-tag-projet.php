<?php
$url = $_SERVER['REQUEST_URI'];
$urlCut = explode("/", $url);
$tag = $urlCut[count($urlCut) - 2];
?>


<?php $query = new WP_Query(array(
    'post_type' => 'portfolio_projet',
    'tag' => $tag
));
if ($query->have_posts()) : ?>
    <section class="projet">
        <h2 class="title-accueil" id="archive-projet-title-accueil">Projets avec : <?php single_tag_title() ?></h2>
        <div class="conteneur flex">
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <article class="projet-article">
                    <div class="image-card">
                        <?php the_post_thumbnail('medium', [
                            'class' => 'projet-image'
                        ]) ?>
                        <div class="black-cover"></div>
                        <div class="conteneur-logo-projet">
                            <?php $image = get_field('projet_logo'); ?>
                            <?php if (!empty($image)) : ?>
                                <img class="logo-projet" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                            <h3><?php the_title(); ?></h3>
                        </div>


                        <a target="blank" href="<?php the_field('projet_link') ?>" class="blue-cover">
                            <?php the_excerpt() ?>
                        </a>
                    </div>
                    <div class="body-card">
                        <h3><a target="blank" href="<?php the_field('projet_link') ?>"><?php the_title(); ?></a></h3>
                        <?php the_tags('<ul><li>', '</li><li>', '</li></ul>'); ?>
                    </div>
                </article>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>

        <?php $the_query = new WP_Query(array(
            'pagename' => 'projet',
        )) ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <a href="<?php the_permalink() ?>" class="button-accueil">Voir tous les projets</a>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    </section>
<?php endif; ?>