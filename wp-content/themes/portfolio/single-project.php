<?php get_header(); ?>

<main class="main-content">
    <section class="project-item">
        <h2 class="project-item__heading"><?php the_title(); ?></h2>

        <div class="project-item__breadcrumb">
            <svg class="project-item__breadcrumb-img" width="12" height="12" viewBox="0 0 12 12" fill="none"
                 stroke="#D4D4D8" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 11V1M1 1H11M1 1L11 11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>

            <a class="project-item__breadcrumb-text" href="<?= esc_url(home_url('/projects')); ?>">Retour aux projets</a>
        </div>

        <a class="project-item__live" href="<?php the_field('project_url'); ?>">
            <div class="project-item__live-subtitle">
                <span class="project-item__live-text">Voir en direct</span>
                <svg class="project-item__live-img" width="12" height="11" viewBox="0 0 9 8" fill="none" stroke="#52525B"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.58337 1.08301H7.41671M7.41671 1.08301V6.91634M7.41671 1.08301L1.58337 6.91634"
                          stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <span class="project-item__live-url"><?php the_field('project_url'); ?></span>
        </a>

        <div class="project-item__figure">
            <img class="project-item__figure-img" src="<?php the_field('project_image'); ?>" alt="">
        </div>

        <div class="project-item__wrapper">

            <div class="project-item__card">
                <div class="project-item__card__body">
                    <div class="project-item__card__title">Description du projet</div>
                    <div class="project-item__card__copy"><?php the_field('project_description'); ?></div>
                </div>

                <div class="project-item__card__body">
                    <div class="project-item__card__title">Quel est le site à cloner ?</div>
                    <div class="project-item__card__copy"><?php the_field('cloning_site'); ?></div>
                </div>

                <div class="project-item__card__body">
                    <div class="project-item__card__title">Pourquoi <?php the_field('cloning_site_name'); ?> ?</div>
                    <div class="project-item__card__copy"><?php the_field('cloning_reason'); ?></div>
                </div>
            </div>

            <div class="project-item__card project-item__card--details">
                <div class="project-item__card__body">
                    <div class="project-item__card__title">Détails</div>
                    <div class="project-item__card__group">
                        <div class="project-item__card__group-content">
                            <div class="project-item__card__group-label">Année</div>
                            <div class="project-item__card__group-value">
                                <div class="project-item__card__group-item"><?php the_field('project_year'); ?></div>
                            </div>
                        </div>
                        <div class="project-item__card__group-content">
                            <div class="project-item__card__group-label">Projet</div>
                            <div class="project-item__card__group-value">
                                <div class="project-item__card__group-item"><?php the_field('project_type'); ?></div>
                            </div>
                        </div>
                        <div class="project-item__card__group-content">
                            <div class="project-item__card__group-label">Services</div>
                            <div class="project-item__card__group-value">
                                <div class="project-item__card__group-item"><?php the_field('project_services'); ?></div>
                            </div>
                        </div>
                        <div class="project-item__card__group-content">
                            <div class="project-item__card__group-label">Technologie</div>
                            <div class="project-item__card__group-value">
                                <div class="project-item__card__group-item"><?php the_field('project_technology'); ?></div>
                            </div>
                        </div>
                        <div class="project-item__card__group-content">
                            <div class="project-item__card__group-label">Outils</div>
                            <div class="project-item__card__group-value">
                                <div class="project-item__card__group-item"><?php the_field('project_tool'); ?></div>
                            </div>
                        </div>
                        <!--<div class="project-item__card__group-content">
                            <div class="project-item__card__group-label">Services</div>
                            <div class="project-item__card__group-value">
                                <?php
/*                                if (have_rows('project_services')):
                                    while (have_rows('project_services')): the_row();
                                        */?>
                                        <div class="project-item__card__group-item"><?php /*the_sub_field('service'); */?></div>
                                    <?php
/*                                    endwhile;
                                endif;
                                */?>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>

            <div class="project-item__card project-item__card--grid">
                <div class="project-item__card__body">
                    <div class="project-item__card__title">Version en ligne</div>
                    <div class="project-item__card__copy"><?php the_field('live_version_description'); ?></div>
                </div>
                <div class="project-item__card__figure">
                    <img class="project-item__card__image" src="<?php the_field('live_version_image'); ?>" alt="">
                </div>
                <a class="button button--in-card project-item__card__link" href="<?php the_field('live_version_url'); ?>">
                    Voir en direct
                    <svg class="project-item__live-img" width="12" height="11" viewBox="0 0 9 8" fill="none" stroke="#52525B"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.58337 1.08301H7.41671M7.41671 1.08301V6.91634M7.41671 1.08301L1.58337 6.91634"
                              stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>

            <div class="project-item__card project-item__card--grid">
                <div class="project-item__card__body">
                    <div class="project-item__card__title">Vers Github</div>
                    <div class="project-item__card__copy"><?php the_field('github_description'); ?></div>
                </div>
                <div class="project-item__card__figure">
                    <img class="project-item__card__image" src="<?php the_field('github_image'); ?>" alt="">
                </div>
                <a class="button button--in-card project-item__card__link" href="<?php the_field('github_url'); ?>">
                    Vers Github
                    <svg class="project-item__live-img" width="12" height="11" viewBox="0 0 9 8" fill="none" stroke="#52525B"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.58337 1.08301H7.41671M7.41671 1.08301V6.91634M7.41671 1.08301L1.58337 6.91634"
                              stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>

            <div class="project-item__card__buttons">
                <a class="button project-item__card__link" href="<?= esc_url(get_contact_page_url()); ?>">
                    Contactez-moi
                </a>

                <div class="project-item__breadcrumb">
                    <svg class="project-item__breadcrumb-img" width="12" height="12" viewBox="0 0 12 12" fill="none"
                         stroke="#D4D4D8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 11V1M1 1H11M1 1L11 11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>

                    <a class="project-item__breadcrumb-text" href="<?= esc_url(home_url('/projects')); ?>">Retour aux projets</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
