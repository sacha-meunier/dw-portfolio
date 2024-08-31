<?php get_header(); ?>

<?php
if (function_exists('get_field')) {
    if (is_singular('project')) {
        $project_ariane = get_field('project_ariane');
        $project_subtitle = get_field('project_subtitle');
        $project_url = get_field('project_url');
        $project_img = get_field('project_image');
        $project_img_mac = get_field('project_image_mac');
        $project_card1_title1 = get_field('project_card1_title1');
        $project_card1_copy1 = get_field('project_card1_copy1');
        $project_card1_title2 = get_field('project_card1_title2');
        $project_card1_copy2 = get_field('project_card1_copy2');
        $project_card1_title3 = get_field('project_card1_title3');
        $project_card1_copy3 = get_field('project_card1_copy3');

        $project_card2_title = get_field('project_card2_title');
        $project_card2_label1 = get_field('project_card2_label1');
        $project_card2_value1 = get_field('project_card2_value1');
        $project_card2_label2 = get_field('project_card2_label2');
        $project_card2_value2 = get_field('project_card2_value2');
        $project_card2_label3 = get_field('project_card2_label3');
        $project_card2_value3 = get_field('project_card2_value3');
        $project_card2_label4 = get_field('project_card2_label4');
        $project_card2_value4 = get_field('project_card2_value4');
        $project_card2_label5 = get_field('project_card2_label5');
        $project_card2_value5 = get_field('project_card2_value5');

        $project_card3_title = get_field('project_card3_title');
        $project_card3_copy = get_field('project_card3_copy');
        $project_card3_img = get_field('project_card3_img');
        $project_card3_cta = get_field('project_card3_cta');

        $project_card4_title = get_field('project_card4_title');
        $project_card4_copy = get_field('project_card4_copy');
        $project_card4_img = get_field('project_card4_img');
        $project_card4_cta = get_field('project_card4_cta');
        $project_card4_cta_url = get_field('project_card4_cta_url');
        $project_cta = get_field('project_cta');
    }
}
?>

<main class="main-content">
    <section class="project-item">
        <h2 class="project-item__heading" data-animate="slide-up-fade"><?= the_title(); ?></h2>

        <div class="project-item__breadcrumb" data-animate="fade-in">
            <svg class="project-item__breadcrumb-img" width="12" height="12" viewBox="0 0 12 12" fill="none"
                 stroke="#D4D4D8" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 11V1M1 1H11M1 1L11 11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>

            <a class="project-item__breadcrumb-text" href="<?= esc_url(home_url('/projects')); ?>"><?= $project_ariane; ?></a>
        </div>

        <a class="project-item__live" href="<?= esc_url($project_url); ?>">
            <div class="project-item__live-subtitle">
                <span class="project-item__live-text" data-animate="slide-up-fade"> <?= $project_subtitle; ?></span>
                <svg class="project-item__live-img" data-animate="slide-up-fade" width="12" height="11" viewBox="0 0 9 8" fill="none" stroke="#52525B"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.58337 1.08301H7.41671M7.41671 1.08301V6.91634M7.41671 1.08301L1.58337 6.91634"
                          stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <span class="project-item__live-url" data-animate="slide-up-fade"><?= esc_html($project_url); ?></span>
        </a>

        <div class="project-item__figure">
            <img class="project-item__figure-img" data-animate="slide-up-fade" src="<?= esc_url($project_img_mac); ?>" alt="Image du projet">
        </div>

        <div class="project-item__wrapper">

            <div class="project-item__card" data-animate="slide-up-fade">
                <div class="project-item__card__body">
                    <div class="project-item__card__title" data-animate="slide-left-fade"><?= esc_html($project_card1_title1); ?></div>
                    <div class="project-item__card__copy" data-animate="slide-left-fade"><?= esc_html($project_card1_copy1); ?></div>
                </div>

                <div class="project-item__card__body">
                    <div class="project-item__card__title" data-animate="slide-left-fade"><?= esc_html($project_card1_title2); ?></div>
                    <div class="project-item__card__copy" data-animate="slide-left-fade"><?= esc_html($project_card1_copy2); ?></div>
                </div>

                <div class="project-item__card__body">
                    <div class="project-item__card__title" data-animate="slide-left-fade"><?= esc_html($project_card1_title3); ?></div>
                    <div class="project-item__card__copy" data-animate="slide-left-fade"><?= esc_html($project_card1_copy3); ?></div>
                </div>
            </div>

            <div class="project-item__card project-item__card--details" data-animate="slide-up-fade">
                <div class="project-item__card__body">
                    <div class="project-item__card__title"><?= esc_html($project_card2_title); ?></div>
                    <div class="project-item__card__group">
                        <div class="project-item__card__group-content">
                            <div class="project-item__card__group-label" data-animate="slide-left-fade"><?= esc_html($project_card2_label1); ?></div>
                            <div class="project-item__card__group-value" data-animate="slide-left-fade">
                                <div class="project-item__card__group-item"><?= esc_html($project_card2_value1); ?></div>
                            </div>
                        </div>
                        <div class="project-item__card__group-content">
                            <div class="project-item__card__group-label" data-animate="slide-left-fade"><?= esc_html($project_card2_label2); ?></div>
                            <div class="project-item__card__group-value" data-animate="slide-left-fade">
                                <div class="project-item__card__group-item"><?= esc_html($project_card2_value2); ?></div>
                            </div>
                        </div>
                        <div class="project-item__card__group-content">
                            <div class="project-item__card__group-label" data-animate="slide-left-fade"><?= esc_html($project_card2_label3); ?></div>
                            <div class="project-item__card__group-value" data-animate="slide-left-fade">
                                <div class="project-item__card__group-item"><?= esc_html($project_card2_value3); ?></div>
                            </div>
                        </div>
                        <div class="project-item__card__group-content">
                            <div class="project-item__card__group-label" data-animate="slide-left-fade"><?= esc_html($project_card2_label4); ?></div>
                            <div class="project-item__card__group-value" data-animate="slide-left-fade">
                                <div class="project-item__card__group-item"><?= esc_html($project_card2_value4); ?></div>
                            </div>
                        </div>
                        <div class="project-item__card__group-content">
                            <div class="project-item__card__group-label" data-animate="slide-left-fade"><?= esc_html($project_card2_label5); ?></div>
                            <div class="project-item__card__group-value" data-animate="slide-left-fade">
                                <div class="project-item__card__group-item"><?= esc_html($project_card2_value5); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="project-item__card project-item__card--grid" data-animate="slide-up-fade">
                <div class="project-item__card__body">
                    <div class="project-item__card__title" data-animate="slide-left-fade"><?= esc_html($project_card3_title); ?></div>
                    <div class="project-item__card__copy" data-animate="slide-left-fade"><?= esc_html($project_card3_copy); ?></div>
                </div>
                <div class="project-item__card__figure">
                    <img class="project-item__card__image" data-animate="fade-in"src="<?= esc_url($project_img); ?>" alt="">
                </div>
                <a class="button button--in-card project-item__card__link" data-animate="slide-left-fade" href="<?= esc_url($project_url); ?>">
                    <?= $project_card3_cta; ?>
                    <svg class="project-item__live-img" width="12" height="11" viewBox="0 0 9 8" fill="none" stroke="#52525B"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.58337 1.08301H7.41671M7.41671 1.08301V6.91634M7.41671 1.08301L1.58337 6.91634"
                              stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>

            <div class="project-item__card project-item__card--grid" data-animate="slide-up-fade">
                <div class="project-item__card__body">
                    <div class="project-item__card__title" data-animate="slide-left-fade"><?= esc_html($project_card4_title); ?></div>
                    <div class="project-item__card__copy" data-animate="slide-left-fade"><?= esc_html($project_card4_copy); ?></div>
                </div>
                <div class="project-item__card__figure">
                    <img class="project-item__card__image" data-animate="fade-in"src="<?= esc_url($project_card4_img); ?>" alt="">
                </div>
                <a class="button button--in-card project-item__card__link" data-animate="slide-left-fade" href="<?= esc_url($project_card4_cta_url); ?>">
                    <?= $project_card4_cta; ?>
                    <svg class="project-item__live-img" width="12" height="11" viewBox="0 0 9 8" fill="none" stroke="#52525B"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.58337 1.08301H7.41671M7.41671 1.08301V6.91634M7.41671 1.08301L1.58337 6.91634"
                              stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>

            <div class="project-item__card__buttons">
                <a class="button project-item__card__link" data-animate="slide-left-fade" href="<?= esc_url(get_contact_page_url()); ?>">
                    <?= $project_cta; ?>
                </a>

                <div class="project-item__breadcrumb" data-animate="slide-left-fade">
                    <svg class="project-item__breadcrumb-img" width="12" height="12" viewBox="0 0 12 12" fill="none"
                         stroke="#D4D4D8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 11V1M1 1H11M1 1L11 11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>

                    <a class="project-item__breadcrumb-text" href="<?= esc_url(home_url('/projects')); ?>"><?= $project_ariane; ?></a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
