<section class="project" id="project">
    <h2 class="section__heading" data-animate="slide-up-fade"><?= get_field('home_projects_title'); ?></h2>
    <p class="section__copy" data-animate="slide-up-fade"><?= get_field('home_projects_copy'); ?></p>

    <div class="project__wrapper">
        <?php
        $projects = new WP_Query([
            'post_type' => 'project',
            'posts_per_page' => 3,
        ]);

        if ($projects->have_posts()):while ($projects->have_posts()): $projects->the_post();
            ?>

            <?= get_template_part('project/card'); ?>

        <?php endwhile;
            wp_reset_postdata();
        else: ?>

            <p>Aucun projet trouvé.</p>

        <?php endif; ?>

        <a class="button" data-animate="slide-up-fade" href="<?= esc_url(get_projects_page_url()); ?>">
            <?= get_field('home_projects_cta'); ?>
        </a>
    </div>
</section>