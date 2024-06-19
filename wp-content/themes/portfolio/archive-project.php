<?php
get_header();
?>

<main class="main-content">
    <section class="project-list">
        <h2 class="project-list__heading">Mes projets</h2>
        <div class="project-list__wrapper">
            <?php
            if (have_posts()):
                while (have_posts()): the_post();
                    ?>
                    <div class="project-list__item">
                        <a href="<?php the_permalink(); ?>">
                            <h3 class="project-list__item-title"><?php the_title(); ?></h3>
                            <div class="project-list__item-thumbnail">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <p class="project-list__item-excerpt"><?php the_excerpt(); ?></p>
                        </a>
                    </div>
                <?php
                endwhile;
            else:
                ?>
                <p>Aucun projet trouvé.</p>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php
get_footer();
?>
