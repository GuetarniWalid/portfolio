<?php get_header() ?>

<main class="resume">
    <!-- Presentation -->
    <section class="presentation" id="presentation-page-cv">
        <div class="conteneur" id="page-cv">
            <h1>Résumé</h1>
            <?php
            $file = get_field('pdf');
            if ($file) : ?>
                <a class="button_download" href="<?php echo $file['url']; ?>"><i class="fas fa-download"></i>&nbsp; Télécharger la version PDF</a>
            <?php endif; ?>
        </div>
    </section>


    <div class="cv">
        <!-- header cv -->
        <?php while (have_rows('presentation')) : the_row(); ?>
            <section class='header-cv'>
                <div>
                    <?php
                    $image = get_sub_field('photo');
                    $url = $image['url'];
                    $alt = $image['alt'];
                    $size = 'thumbnail';
                    $thumb = $image['sizes'][$size];
                    ?>
                    <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" />
                </div>
                <div>
                    <h2><?php the_sub_field('nom'); ?> <?php the_sub_field('prenom'); ?></h2>
                    <h3><?php the_sub_field('metier'); ?></h3>
                    <address>
                        <a href="mailto:<?php the_sub_field('email'); ?>"><i class="far fa-envelope"></i>&nbsp; &nbsp; <?php the_sub_field('email'); ?></a>
                        <a href="<?php the_sub_field('tel'); ?>">&nbsp;<i class="fas fa-mobile-alt"></i>&nbsp; &nbsp; <?php the_sub_field('tel'); ?></a>
                    </address>
                </div>
            <?php endwhile; ?>


            <!-- Lien vers les reseaux -->
            <div>
                <?php while (have_rows('reseau-1')) : the_row(); ?>
                    <?php if (get_sub_field('logo')) : ?>
                        <a href="<?php the_sub_field('url') ?>" target="blank"><?php the_sub_field('logo') ?> <?php the_sub_field('url') ?></a>
                    <?php endif; ?>
                <?php endwhile; ?>

                <?php while (have_rows('reseau_2')) : the_row(); ?>
                    <?php if (get_sub_field('logo')) : ?>
                        <a href="<?php the_sub_field('url') ?>" target="blank"><?php the_sub_field('logo') ?> <?php the_sub_field('url') ?></a>
                    <?php endif; ?>
                <?php endwhile; ?>

                <?php while (have_rows('reseau_3')) : the_row(); ?>
                    <?php if (get_sub_field('logo')) : ?>
                        <a href="<?php the_sub_field('url') ?>" target="blank"><?php the_sub_field('logo') ?> <?php the_sub_field('url') ?></a>
                    <?php endif; ?>
                <?php endwhile; ?>

                <?php while (have_rows('reseau_4')) : the_row(); ?>
                    <?php if (get_sub_field('logo')) : ?>
                        <a href="<?php the_sub_field('url') ?>" target="blank"><?php the_sub_field('logo') ?> <?php the_sub_field('url') ?></a>
                    <?php endif; ?>
                <?php endwhile; ?>

                <?php while (have_rows('reseau_5')) : the_row(); ?>
                    <?php if (get_sub_field('logo')) : ?>
                        <a href="<?php the_sub_field('url') ?>" target="blank"><?php the_sub_field('logo') ?> <?php the_sub_field('url') ?></a>
                    <?php endif; ?>
                <?php endwhile; ?>
            </div>
            </section>

            <!-- Résumé de carriere -->
            <?php if (get_field('resume')) : ?>
                <section class="career">
                    <h3>Résumé de carrière</h3>
                    <p><?php the_field('resume'); ?></p>
                </section>
            <?php endif; ?>


            <div class="experience-flex">
                <!-- Section Experience -->
                <section class="experience">
                    <h3>Expérience</h3>
                    <?php while (have_rows('experience-1')) : the_row(); ?>
                        <?php if (get_sub_field('poste')) : ?>
                            <div>
                                <div class="experience-sub-title">
                                    <h4><?php the_sub_field('poste') ?></h4>
                                    <p class="entreprise"><?php the_sub_field('entreprise') ?></p>

                                </div>
                                <date><?php the_sub_field('date') ?></date>
                                <p><?php the_sub_field('description') ?></p>
                                <?php if (get_sub_field('realisation')) : ?>
                                    <h4>Réalisations: </h4>
                                    <p class="realisation"><?php the_sub_field('realisation') ?></p>
                                <?php endif; ?>
                                <h4>Technologies utilisées :</h4>
                                <ul><?php
                                    $tags = get_sub_field('technologies');
                                    $tagArray = explode(' ', $tags);
                                    foreach ($tagArray as $tag) {
                                        echo '<li>' . $tag . '</li>';
                                    }
                                    ?></ul>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                    <?php while (have_rows('experience_2')) : the_row(); ?>
                        <?php if (get_sub_field('poste')) : ?>
                            <div>
                                <div class="experience-sub-title">
                                    <h4><?php the_sub_field('poste') ?></h4>
                                    <p class="entreprise"><?php the_sub_field('entreprise') ?></p>

                                </div>
                                <date><?php the_sub_field('date') ?></date>
                                <p><?php the_sub_field('description') ?></p>
                                <?php if (get_sub_field('realisation')) : ?>
                                    <h4>Réalisations: </h4>
                                    <p class="realisation"><?php the_sub_field('realisation') ?></p>
                                <?php endif; ?>
                                <h4>Technologies utilisées :</h4>
                                <ul><?php
                                    $tags = get_sub_field('technologies');
                                    $tagArray = explode(' ', $tags);
                                    foreach ($tagArray as $tag) {
                                        echo '<li>' . $tag . '</li>';
                                    }
                                    ?></ul>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                    <?php while (have_rows('experience_3')) : the_row(); ?>
                        <?php if (get_sub_field('poste')) : ?>
                            <div>
                                <div class="experience-sub-title">
                                    <h4><?php the_sub_field('poste') ?></h4>
                                    <p class="entreprise"><?php the_sub_field('entreprise') ?></p>

                                </div>
                                <date><?php the_sub_field('date') ?></date>
                                <p><?php the_sub_field('description') ?></p>
                                <?php if (get_sub_field('realisation')) : ?>
                                    <h4>Réalisations: </h4>
                                    <p class="realisation"><?php the_sub_field('realisation') ?></p>
                                <?php endif; ?>
                                <h4>Technologies utilisées :</h4>
                                <ul><?php
                                    $tags = get_sub_field('technologies');
                                    $tagArray = explode(' ', $tags);
                                    foreach ($tagArray as $tag) {
                                        echo '<li>' . $tag . '</li>';
                                    }
                                    ?></ul>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                    <?php while (have_rows('experience_4')) : the_row(); ?>
                        <?php if (get_sub_field('poste')) : ?>
                            <div>
                                <div class="experience-sub-title">
                                    <h4><?php the_sub_field('poste') ?></h4>
                                    <p class="entreprise"><?php the_sub_field('entreprise') ?></p>

                                </div>
                                <date><?php the_sub_field('date') ?></date>
                                <p><?php the_sub_field('description') ?></p>
                                <?php if (get_sub_field('realisation')) : ?>
                                    <h4>Réalisations: </h4>
                                    <p class="realisation"><?php the_sub_field('realisation') ?></p>
                                <?php endif; ?>
                                <h4>Technologies utilisées :</h4>
                                <ul><?php
                                    $tags = get_sub_field('technologies');
                                    $tagArray = explode(' ', $tags);
                                    foreach ($tagArray as $tag) {
                                        echo '<li>' . $tag . '</li>';
                                    }
                                    ?></ul>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                    <?php while (have_rows('experience_5')) : the_row(); ?>
                        <?php if (get_sub_field('poste')) : ?>
                            <div>
                                <div class="experience-sub-title">
                                    <h4><?php the_sub_field('poste') ?></h4>
                                    <p class="entreprise"><?php the_sub_field('entreprise') ?></p>

                                </div>
                                <date><?php the_sub_field('date') ?></date>
                                <p><?php the_sub_field('description') ?></p>
                                <?php if (get_sub_field('realisation')) : ?>
                                    <h4>Réalisations: </h4>
                                    <p class="realisation"><?php the_sub_field('realisation') ?></p>
                                <?php endif; ?>
                                <h4>Technologies utilisées :</h4>
                                <ul><?php
                                    $tags = get_sub_field('technologies');
                                    $tagArray = explode(' ', $tags);
                                    foreach ($tagArray as $tag) {
                                        echo '<li>' . $tag . '</li>';
                                    }
                                    ?></ul>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                    <?php while (have_rows('experience_6')) : the_row(); ?>
                        <?php if (get_sub_field('poste')) : ?>
                            <div>
                                <div class="experience-sub-title">
                                    <h4><?php the_sub_field('poste') ?></h4>
                                    <p class="entreprise"><?php the_sub_field('entreprise') ?></p>

                                </div>
                                <date><?php the_sub_field('date') ?></date>
                                <p><?php the_sub_field('description') ?></p>
                                <?php if (get_sub_field('realisation')) : ?>
                                    <h4>Réalisations: </h4>
                                    <p class="realisation"><?php the_sub_field('realisation') ?></p>
                                <?php endif; ?>
                                <h4>Technologies utilisées :</h4>
                                <ul><?php
                                    $tags = get_sub_field('technologies');
                                    $tagArray = explode(' ', $tags);
                                    foreach ($tagArray as $tag) {
                                        echo '<li>' . $tag . '</li>';
                                    }
                                    ?></ul>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                    <?php while (have_rows('experience_7')) : the_row(); ?>
                        <?php if (get_sub_field('poste')) : ?>
                            <div>
                                <div class="experience-sub-title">
                                    <h4><?php the_sub_field('poste') ?></h4>
                                    <p class="entreprise"><?php the_sub_field('entreprise') ?></p>

                                </div>
                                <date><?php the_sub_field('date') ?></date>
                                <p><?php the_sub_field('description') ?></p>
                                <?php if (get_sub_field('realisation')) : ?>
                                    <h4>Réalisations: </h4>
                                    <p class="realisation"><?php the_sub_field('realisation') ?></p>
                                <?php endif; ?>
                                <h4>Technologies utilisées :</h4>
                                <ul><?php
                                    $tags = get_sub_field('technologies');
                                    $tagArray = explode(' ', $tags);
                                    foreach ($tagArray as $tag) {
                                        echo '<li>' . $tag . '</li>';
                                    }
                                    ?></ul>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                </section>

                <!-- Sidebar to the right -->

                <!-- Competences et outils -->
                <div class="sidebar-right">
                    <!-- Section Competence et outils -->
                    <section>
                        <h3>Competences</h3>

                        <!-- Frontend -->
                        <?php while (have_rows('frontend')) : the_row() ?>
                            <?php while (have_rows('techno_1')) : the_row() ?>
                                <h4>Frontend</h4>
                                <p><?php the_sub_field('nom') ?></p>
                                <progress max="100" value="<?php the_sub_field('pourcentage') ?>"></progress>
                            <?php endwhile; ?>

                            <?php while (have_rows('techno_2')) : the_row() ?>
                                <?php if (get_sub_field('nom')) : ?>
                                    <p><?php the_sub_field('nom') ?></p>
                                    <progress max="100" value="<?php the_sub_field('pourcentage') ?>"></progress>
                                <?php endif; ?>
                            <?php endwhile; ?>

                            <?php while (have_rows('techno_3')) : the_row() ?>
                                <?php if (get_sub_field('nom')) : ?>
                                    <p><?php the_sub_field('nom') ?></p>
                                    <progress max="100" value="<?php the_sub_field('pourcentage') ?>"></progress>
                                <?php endif; ?>
                            <?php endwhile; ?>

                            <?php while (have_rows('techno_4')) : the_row() ?>
                                <?php if (get_sub_field('nom')) : ?>
                                    <p><?php the_sub_field('nom') ?></p>
                                    <progress max="100" value="<?php the_sub_field('pourcentage') ?>"></progress>
                                <?php endif; ?>
                            <?php endwhile; ?>

                            <?php while (have_rows('techno_5')) : the_row() ?>
                                <?php if (get_sub_field('nom')) : ?>
                                    <p><?php the_sub_field('nom') ?></p>
                                    <progress max="100" value="<?php the_sub_field('pourcentage') ?>"></progress>
                                <?php endif; ?>
                            <?php endwhile; ?>

                            <?php while (have_rows('techno_6')) : the_row() ?>
                                <?php if (get_sub_field('nom')) : ?>
                                    <p><?php the_sub_field('nom') ?></p>
                                    <progress max="100" value="<?php the_sub_field('pourcentage') ?>"></progress>
                                <?php endif; ?>
                            <?php endwhile; ?>

                            <?php while (have_rows('techno_7')) : the_row() ?>
                                <?php if (get_sub_field('nom')) : ?>
                                    <p><?php the_sub_field('nom') ?></p>
                                    <progress max="100" value="<?php the_sub_field('pourcentage') ?>"></progress>
                                <?php endif; ?>
                            <?php endwhile; ?>

                        <?php endwhile; ?>


                        <!-- Backend -->
                        <?php while (have_rows('backend')) : the_row() ?>
                            <?php while (have_rows('techno_1')) : the_row() ?>
                                <h4>Backend</h4>
                                <p><?php the_sub_field('nom') ?></p>
                                <progress max="100" value="<?php the_sub_field('pourcentage') ?>"></progress>
                            <?php endwhile; ?>

                            <?php while (have_rows('techno_2')) : the_row() ?>
                                <?php if (get_sub_field('nom')) : ?>
                                    <p><?php the_sub_field('nom') ?></p>
                                    <progress max="100" value="<?php the_sub_field('pourcentage') ?>"></progress>
                                <?php endif; ?>
                            <?php endwhile; ?>

                            <?php while (have_rows('techno_3')) : the_row() ?>
                                <?php if (get_sub_field('nom')) : ?>
                                    <p><?php the_sub_field('nom') ?></p>
                                    <progress max="100" value="<?php the_sub_field('pourcentage') ?>"></progress>
                                <?php endif; ?>
                            <?php endwhile; ?>

                            <?php while (have_rows('techno_4')) : the_row() ?>
                                <?php if (get_sub_field('nom')) : ?>
                                    <p><?php the_sub_field('nom') ?></p>
                                    <progress max="100" value="<?php the_sub_field('pourcentage') ?>"></progress>
                                <?php endif; ?>
                            <?php endwhile; ?>

                            <?php while (have_rows('techno_5')) : the_row() ?>
                                <?php if (get_sub_field('nom')) : ?>
                                    <p><?php the_sub_field('nom') ?></p>
                                    <progress max="100" value="<?php the_sub_field('pourcentage') ?>"></progress>
                                <?php endif; ?>
                            <?php endwhile; ?>

                            <?php while (have_rows('techno_6')) : the_row() ?>
                                <?php if (get_sub_field('nom')) : ?>
                                    <p><?php the_sub_field('nom') ?></p>
                                    <progress max="100" value="<?php the_sub_field('pourcentage') ?>"></progress>
                                <?php endif; ?>
                            <?php endwhile; ?>

                            <?php while (have_rows('techno_7')) : the_row() ?>
                                <?php if (get_sub_field('nom')) : ?>
                                    <p><?php the_sub_field('nom') ?></p>
                                    <progress max="100" value="<?php the_sub_field('pourcentage') ?>"></progress>
                                <?php endif; ?>
                            <?php endwhile; ?>

                        <?php endwhile; ?>


                        <!-- Outils -->
                        <?php if (get_field('outils')) : ?>
                            <h4>Outils</h4>
                            <ul><?php
                                $tools = get_field('technologies');
                                $toolsArray = explode(' ', $tags);
                                foreach ($toolsArray as $tool) {
                                    echo '<li>' . $tool . '</li>';
                                }
                                ?></ul>
                        <?php endif; ?>
                    </section>

                    <!-- Section Education -->
                    <section class="education">
                        <?php while (have_rows('education')) : the_row() ?>

                            <?php while (have_rows('parcours_1')) : the_row() ?>
                                <?php if (get_sub_field('intitule')) : ?>
                                    <h3>Education</h3>
                                    <h4><?php the_sub_field('intitule') ?></h4>
                                    <p><?php the_sub_field('description') ?></p>
                                    <date><?php the_sub_field('date') ?></date>
                                <?php endif; ?>
                            <?php endwhile; ?>

                            <?php while (have_rows('parcours_2')) : the_row() ?>
                                <?php if (get_sub_field('intitule')) : ?>
                                    <h4><?php the_sub_field('intitule') ?></h4>
                                    <p><?php the_sub_field('description') ?></p>
                                    <date><?php the_sub_field('date') ?></date>
                                <?php endif; ?>
                            <?php endwhile; ?>

                            <?php while (have_rows('parcours_3')) : the_row() ?>
                                <?php if (get_sub_field('intitule')) : ?>
                                    <h4><?php the_sub_field('intitule') ?></h4>
                                    <p><?php the_sub_field('description') ?></p>
                                    <date><?php the_sub_field('date') ?></date>
                                <?php endif; ?>
                            <?php endwhile; ?>

                            <?php while (have_rows('parcours_4')) : the_row() ?>
                                <?php if (get_sub_field('intitule')) : ?>
                                    <h4><?php the_sub_field('intitule') ?></h4>
                                    <p><?php the_sub_field('description') ?></p>
                                    <date><?php the_sub_field('date') ?></date>
                                <?php endif; ?>
                            <?php endwhile; ?>

                            <?php while (have_rows('parcours_5')) : the_row() ?>
                                <?php if (get_sub_field('intitule')) : ?>
                                    <h4><?php the_sub_field('intitule') ?></h4>
                                    <p><?php the_sub_field('description') ?></p>
                                    <date><?php the_sub_field('date') ?></date>
                                <?php endif; ?>
                            <?php endwhile; ?>

                        <?php endwhile; ?>
                    </section>


                    <!-- Section Langue -->
                    <section class="langue">
                        <?php while (have_rows('langue')) : the_row() ?>

                            <?php while (have_rows('langue_1')) : the_row() ?>
                                <?php if (get_sub_field('nom')) : ?>
                                    <h3>Langue</h3>
                                    <h4><?php the_sub_field('nom') ?></h4>
                                    <p><?php the_sub_field('niveau') ?></p>
                                <?php endif; ?>
                            <?php endwhile; ?>

                            <?php while (have_rows('langue_2')) : the_row() ?>
                                <?php if (get_sub_field('nom')) : ?>
                                    <h4><?php the_sub_field('nom') ?></h4>
                                    <p><?php the_sub_field('niveau') ?></p>
                                <?php endif; ?>
                            <?php endwhile; ?>

                            <?php while (have_rows('langue_3')) : the_row() ?>
                                <?php if (get_sub_field('nom')) : ?>
                                    <h4><?php the_sub_field('nom') ?></h4>
                                    <p><?php the_sub_field('niveau') ?></p>
                                <?php endif; ?>
                            <?php endwhile; ?>

                            <?php while (have_rows('langue_4')) : the_row() ?>
                                <?php if (get_sub_field('nom')) : ?>
                                    <h4><?php the_sub_field('nom') ?></h4>
                                    <p><?php the_sub_field('niveau') ?></p>
                                <?php endif; ?>
                            <?php endwhile; ?>

                        <?php endwhile; ?>
                    </section>

                    <!-- Section Intérêts -->
                    <section class="interest">
                        <?php if (get_field('outils')) : ?>
                            <h3>Intérêts</h3>
                            <ul><?php
                                $interests = get_field('interets');
                                $interestsArray = explode(' ', $interests);
                                foreach ($interestsArray as $interest) {
                                    echo '<li>' . $interest . '</li>';
                                }
                                ?></ul>
                        <?php endif; ?>
                    </section>
                </div>
            </div>
    </div>

</main>

<?php get_footer() ?>