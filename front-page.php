<?php get_header() ?>

<main>
    <!-- Presentation -->
    <section class="presentation">
        <?php if (have_rows('presentation')) : ?>
            <?php while (have_rows('presentation')) : the_row(); ?>
                <div class="conteneur">
                    <div class="photo">
                        <?php
                        $image = get_sub_field('photo');
                        $url = $image['url'];
                        $alt = $image['alt'];
                        $size = 'thumbnail';
                        $thumb = $image['sizes'][$size];
                        ?>
                        <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>">
                    </div>
                    <div class="texte">
                        <p>Bonjour, mon nom est</p>
                        <h1><?php the_sub_field('nom') ?> <?php the_sub_field('prenom'); ?></h1>
                        <p><?php the_sub_field('description') ?></p>
                    <?php endwhile; ?>
                <?php endif; ?>

                <?php $the_query = new WP_Query(array(
                    'pagename' => 'contact',
                )) ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <a href="<?php the_permalink() ?>">Me Saluer</a>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                    </div>
                </div>
    </section>

    <!-- Competences -->
    <section class="competences">
        <div class="conteneur">
            <h2 class="title-accueil">competences</h2>
            <?php if (get_field('description_competence')) : ?>
                <p><?php the_field('description_competence') ?></p>
            <?php endif; ?>

            <?php $the_query = new WP_Query(array(
                'pagename' => 'resume',
            )) ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <a href="<?php the_permalink() ?>">Voici mon résumé en ligne</a>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <div class="flex">

                <?php if (have_rows('competence_1')) : ?>
                    <?php while (have_rows('competence_1')) : the_row(); ?>
                        <div class="card">
                            <div>
                                <?php the_sub_field('logo') ?>
                            </div>
                            <h3><?php the_sub_field('description') ?></h3>
                            <ul>
                                <?php
                                $details = explode(" ", get_sub_field('detail'));
                                foreach ($details as $detail) {
                                    echo '<li><i class="fas fa-check"></i> &nbsp;&nbsp;' . $detail . '</li>';
                                }
                                ?>
                            </ul>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

                <?php if (have_rows('competence_2')) : ?>
                    <?php while (have_rows('competence_2')) : the_row(); ?>
                        <div class="card">
                            <div>
                                <?php the_sub_field('logo') ?>
                            </div>
                            <h3><?php the_sub_field('description') ?></h3>
                            <ul>
                                <?php
                                $details = explode(" ", get_sub_field('detail'));
                                foreach ($details as $detail) {
                                    echo '<li><i class="fas fa-check"></i> &nbsp;&nbsp;' . $detail . '</li>';
                                }
                                ?>
                            </ul>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

                <?php if (have_rows('competence_3')) : ?>
                    <?php while (have_rows('competence_3')) : the_row(); ?>
                        <div class="card">
                            <div>
                                <?php the_sub_field('logo') ?>
                            </div>
                            <h3><?php the_sub_field('description') ?></h3>
                            <ul>
                                <?php
                                $details = explode(" ", get_sub_field('detail'));
                                foreach ($details as $detail) {
                                    echo '<li><i class="fas fa-check"></i> &nbsp;&nbsp;' . $detail . '</li>';
                                }
                                ?>
                            </ul>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Projet -->
    <section class="projet">
        <h2 class="title-accueil">Mes Projets</h2>
        <div class="conteneur flex">
            <?php get_template_part('parts/content', 'projet') ?>
        </div>
        <?php $the_query = new WP_Query(array(
            'pagename' => 'projet',
        )) ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <a href="<?php the_permalink() ?>" class="button-accueil">Voir tous les projets</a>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    </section>

    <!-- blogs -->
    <section class="blogs">
        <h2 class="title-accueil">Blog</h2>
        <div class="two-column conteneur flex">
            <?php get_template_part('parts/content', 'blog') ?>
        </div>
        <?php $the_query = new WP_Query(array(
            'pagename' => 'blog',
        )) ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <a href="<?php the_permalink() ?>" class="button-accueil">Voir tous les blogs</a>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    </section>
</main>

<?php get_footer() ?>