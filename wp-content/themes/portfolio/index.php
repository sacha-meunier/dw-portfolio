<?php
if (function_exists('get_field')) {
    if (is_front_page()) {
        $home_hero_title = get_field('home_hero_title');
        $home_hero_location = get_field('home_hero_location');
        $home_hero_location_icon = get_field('home_hero_location_icon');
        $home_hero_copy = get_field('home_hero_copy');

        $home_services_title = get_field('home_services_title');
        $home_services_copy = get_field('home_services_copy');
        $home_services_card1_icon = get_field('home_services_card1_icon');
        $home_services_card1_title = get_field('home_services_card1_title');
        $home_services_card1_copy = get_field('home_services_card1_copy');

        $home_services_card2_icon = get_field('home_services_card2_icon');
        $home_services_card2_title = get_field('home_services_card2_title');
        $home_services_card2_copy = get_field('home_services_card2_copy');

        $home_services_card3_icon = get_field('home_services_card3_icon');
        $home_services_card3_title = get_field('home_services_card3_title');
        $home_services_card3_copy = get_field('home_services_card3_copy');

        $home_projects_title = get_field('home_projects_title');
        $home_projects_copy = get_field('home_projects_copy');
        $home_projects_cta = get_field('home_projects_cta');

        $home_formation_title = get_field('home_formation_title');
        $home_formation_copy = get_field('home_formation_copy');

        $home_formation_card1_date = get_field('home_formation_card1_date');
        $home_formation_card1_title = get_field('home_formation_card1_title');
        $home_formation_card1_copy = get_field('home_formation_card1_copy');

        $home_formation_card2_date = get_field('home_formation_card2_date');
        $home_formation_card2_title = get_field('home_formation_card2_title');
        $home_formation_card2_copy = get_field('home_formation_card2_copy');

        $home_formation_card3_date = get_field('home_formation_card3_date');
        $home_formation_card3_title = get_field('home_formation_card3_title');
        $home_formation_card3_copy = get_field('home_formation_card3_copy');
    }
}
?>

<?php get_header(); ?>

    <section class="hero">
        <h1 class="hero__title"><?php echo esc_html($home_hero_title); ?></h1>
        <div class="hero__location">
            <svg width="18" height="18" fill="#0F0928" xmlns="http://www.w3.org/2000/svg">
                <path d="m9 17.796-4.773-4.773a6.75 6.75 0 1 1 9.546 0L9 17.796zm3.713-5.834a5.25 5.25 0 1 0-7.425 0L9 15.675l3.713-3.713zM9 9.75a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
            </svg>
            <span><?php echo esc_html($home_hero_location); ?></span>
        </div>
        <div class="hero__copy"><?php echo esc_html($home_hero_copy); ?>
        </div>
    </section>

    <section class="services" id="services">
        <h2 class="section__heading"><?= ($home_services_title); ?></h2>
        <p class="section__copy"><?= ($home_services_copy); ?></p>

        <div class="services__wrapper">
            <div class="services__card">
                <div class="services__card__figure">
                    <svg width="28" height="24" viewBox="0 0 28 24" fill="none" stroke="#E4E4E7"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.5 17L26.5 12L21.5 7M6.5 7L1.5 12L6.5 17M17.125 2L10.875 22" stroke-width="3"
                              stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="services__card__body">
                    <div class="services__card__title"><?= ($home_services_card1_title); ?></div>
                    <div class="services__card__copy"><?= ($home_services_card1_copy); ?>
                    </div>
                </div>
            </div>
            <div class="services__card">
                <div class="services__card__figure">
                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" stroke="#E4E4E7"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.25 1.75V6.75M21.75 19.25V24.25M1.75 4.25H6.75M19.25 21.75H24.25M13 1.75L10.61 9.01625C10.4877 9.38814 10.2797 9.7261 10.0029 10.0029C9.7261 10.2797 9.38814 10.4877 9.01625 10.61L1.75 13L9.01625 15.39C9.38814 15.5123 9.7261 15.7203 10.0029 15.9971C10.2797 16.2739 10.4877 16.6119 10.61 16.9838L13 24.25L15.39 16.9838C15.5123 16.6119 15.7203 16.2739 15.9971 15.9971C16.2739 15.7203 16.6119 15.5123 16.9838 15.39L24.25 13L16.9838 10.61C16.6119 10.4877 16.2739 10.2797 15.9971 10.0029C15.7203 9.7261 15.5123 9.38814 15.39 9.01625L13 1.75Z"
                              stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="services__card__body">
                    <div class="services__card__title"><?= ($home_services_card2_title); ?></div>
                    <div class="services__card__copy"><?= ($home_services_card2_copy); ?>
                    </div>
                </div>
            </div>
            <div class="services__card">
                <div class="services__card__figure">
                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" stroke="#E4E4E7"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M26.5 14C26.5 20.9036 20.9036 26.5 14 26.5M26.5 14C26.5 7.09644 20.9036 1.5 14 1.5M26.5 14H1.5M14 26.5C7.09644 26.5 1.5 20.9036 1.5 14M14 26.5C17.1266 23.0771 18.9034 18.635 19 14C18.9034 9.36504 17.1266 4.92294 14 1.5M14 26.5C10.8734 23.0771 9.09656 18.635 9 14C9.09656 9.36504 10.8734 4.92294 14 1.5M1.5 14C1.5 7.09644 7.09644 1.5 14 1.5"
                              stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="services__card__body">
                    <div class="services__card__title"><?= ($home_services_card3_title); ?></div>
                    <div class="services__card__copy"><?= ($home_services_card3_copy); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="project" id="project">
        <h2 class="section__heading"><?= ($home_projects_title); ?></h2>
        <p class="section__copy"><?= ($home_projects_copy); ?></p>

        <div class="project__wrapper">

            <?php
            $projects = new WP_Query([
                'post_type' => 'project',
                'posts_per_page' => 3,
            ]);

            if($projects->have_posts()): while($projects->have_posts()): $projects->the_post();
            ?>

            <a href="<?php the_permalink(); ?>" class="project__card">
                <div class="project__card__figure">
                    <img class="project__card__image" src="" alt="">
                </div>
                <div class="project__card__body">
                    <div class="project__card__title"><?= get_the_title(); ?></div>
                    <div class="project__card__copy"><?= get_field('project_description_copy'); ?></div>
                </div>
            </a>

            <?php endwhile; endif; ?>

            <a class="button" type="submit" href="<?= esc_url(get_projects_page_url()); ?>">
                <?= ($home_projects_cta); ?>
            </a>
        </div>
    </section>

    <section class="services training" id="training">
        <h2 class="section__heading"><?= ($home_formation_title); ?></h2>
        <p class="section__copy"><?= ($home_formation_copy); ?></p>

        <div class="services__wrapper">
            <div class="services__card">
                <div class="services__card__date"><?= ($home_formation_card1_date); ?></div>
                <div class="services__card__body">
                    <div class="services__card__title"><?= ($home_formation_card1_title); ?></div>
                    <div class="services__card__copy"><?= ($home_formation_card1_copy); ?></div>
                </div>
            </div>
            <div class="services__card">
                <div class="services__card__date"><?= ($home_formation_card2_date); ?></div>
                <div class="services__card__body">
                    <div class="services__card__title"><?= ($home_formation_card2_title); ?></div>
                    <div class="services__card__copy"><?= ($home_formation_card2_copy); ?></div>
                </div>
            </div>
            <div class="services__card">
                <div class="services__card__date"><?= ($home_formation_card3_date); ?></div>
                <div class="services__card__body">
                    <div class="services__card__title"><?= ($home_formation_card3_title); ?></div>
                    <div class="services__card__copy"><?= ($home_formation_card3_copy); ?></div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>