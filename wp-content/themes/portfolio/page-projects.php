<?php
/*
Template Name: Page des Projets
*/
get_header();
?>

<main class="main-content">
    <section class="project">
        <h2 class="project__heading">Mes projets</h2>
        <div class="project__wrapper">
            <?php
            $projects = new WP_Query(array(
                'post_type' => 'project',
                'posts_per_page' => -1
            ));

            if ($projects->have_posts()):
                while ($projects->have_posts()): $projects->the_post();
                    $project_image = get_the_post_thumbnail_url(get_the_ID(), 'large');
                    ?>
                    <a class="project__card" href="<?php the_permalink(); ?>">
                        <div class="project__card__figure">
                            <?php if ($project_image): ?>
                                <img class="project__card__image" src="<?= esc_url($project_image); ?>"
                                     alt="<?php the_title(); ?>">
                            <?php else: ?>
                                <img class="project__card__image"
                                     src="<?= esc_url(get_template_directory_uri()); ?>/path/to/default-image.jpg"
                                     alt="<?php the_title(); ?>">
                            <?php endif; ?>
                        </div>
                        <div class="project__card__body">
                            <div class="project__card__title"><?php the_title(); ?></div>
                            <div class="project__card__copy"><?php the_excerpt(); ?></div>
                        </div>
                    </a>
                <?php
                endwhile;
                wp_reset_postdata(); // Réinitialiser les données de la boucle
            else:
                ?>
                <p>Aucun projet trouvé.</p>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
