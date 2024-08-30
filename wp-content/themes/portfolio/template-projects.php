<?php /* Template Name: Projects page template */ ?>
<?php get_header(); ?>

    <section class="project main-content">
        <h2 class="project__heading">Mes projets</h2>

        <div class="project__wrapper">
            <?php
            $projects = new WP_Query([
                'post_type' => 'project',
                'posts_per_page' => -1,
            ]);

            if ($projects->have_posts()):while ($projects->have_posts()): $projects->the_post();
                ?>

                <?= get_template_part('project/card'); ?>

            <?php endwhile;
                wp_reset_postdata();
            else: ?>

            <p>Aucun projet trouvé.</p>

            <?php endif; ?>
        </div>
    </section>

<?php get_footer(); ?>