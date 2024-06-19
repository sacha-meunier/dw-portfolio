<?php get_header(); ?>
    <section class="hero">
        <h1 class="hero__title">Je m'appelle Sacha</h1>
        <div class="hero__location">
            <svg width="18" height="18" fill="#0F0928" xmlns="http://www.w3.org/2000/svg"><path d="m9 17.796-4.773-4.773a6.75 6.75 0 1 1 9.546 0L9 17.796zm3.713-5.834a5.25 5.25 0 1 0-7.425 0L9 15.675l3.713-3.713zM9 9.75a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/></svg>
            <span>Faimes, Belgique</span>
        </div>
        <div class="hero__copy">Je suis développeur web Front-End
        </div>
    </section>
    <section class="services" id="services">
        <h2 class="section__heading">Services</h2>
        <p class="section__copy">Les choses que je peux faire pour vous !</p>

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
                    <div class="services__card__title">Dévelopement Web</div>
                    <div class="services__card__copy">Je développe des sites web centrés sur l’accessibilité et les
                        performances.
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
                    <div class="services__card__title">UI / UX Design</div>
                    <div class="services__card__copy">Je conçois des interfaces centrées sur l’utilisateur et qui valorisent
                        votre marque.
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
                    <div class="services__card__title">SEO</div>
                    <div class="services__card__copy">En plus de créer une expérience memorable, j’optimise votre visibilité
                        sur internet.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="project" id="project">
        <h2 class="section__heading">Projets récents</h2>
        <p class="section__copy">Projets scolaires, personnels et professionnels</p>
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
    <section class="services training" id="training">
        <h2 class="section__heading">Ma formation</h2>
        <p class="section__copy">Découvrez où j'ai acquis mes compétences</p>

        <div class="services__wrapper">
            <div class="services__card">
                <div class="services__card__date">
                    2021-2024
                </div>
                <div class="services__card__body">
                    <div class="services__card__title">Bachelier en technique graphique</div>
                    <div class="services__card__copy">Je suis actuellement étudiant à la Haute École de la Province de
                        Liège, où je me spécialise dans le graphisme et le développement web. Mon parcours m'a permis de
                        maîtriser les langages essentiels au développement front-end et back-end tels que HTML, CSS,
                        TypeScript et PHP.
                    </div>
                </div>
            </div>
            <div class="services__card">
                <div class="services__card__date">
                    2016-2023
                </div>
                <div class="services__card__body">
                    <div class="services__card__title">Auto-perfectionnement</div>
                    <div class="services__card__copy">Je suis passionné par le développement personnel dans les domaines du
                        graphisme, du montage vidéo et du web. En autodidacte, j'explore diverses techniques et outils pour
                        affiner mes compétences. Mon parcours m'a conduit à maîtriser les aspects créatifs et techniques
                        essentiels de ces disciplines, utilisant tout les outils à ma portée.
                    </div>
                </div>
            </div>
            <div class="services__card">
                <div class="services__card__date">
                    2016-2020
                </div>
                <div class="services__card__body">
                    <div class="services__card__title">Collège Saint-Louis Waremme</div>
                    <div class="services__card__copy">J'ai obtenu mon CESS en technique de transition informatique, où j'ai
                        acquis les fondamentaux du web, du graphisme et de l'informatique. Je continue d'explorer et de
                        perfectionner mes connaissances de manière
                        autodidacte, en utilisant ces bases solides comme tremplin pour mes projets personnels et
                        professionnels.
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>