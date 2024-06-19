<?php
/*
Template Name: Page des Projets
*/
?>
<?php get_header(); ?>
    <section class="project">
        <h2 class="project__heading">Mes projets</h2>
        <div class="project__wrapper">
            <div class="project__card">
                <div class="project__card__figure">
                    <img class="project__card__image" src="" alt="">
                </div>
                <div class="project__card__body">
                    <div class="project__card__title">Le Sef de Huy</div>
                    <div class="project__card__copy">Création d’un site web pour une asbl dans le cadre du cours de Design Web.</div>
                </div>
            </div>
            <div class="project__card project__card--reversed">
                <div class="project__card__figure">
                    <img class="project__card__image" src="" alt="">
                </div>
                <div class="project__card__body">
                    <div class="project__card__title">Le CV</div>
                    <div class="project__card__copy">Projet consistant à cloner la page d’accueil d’un site et la transformer en un CV dans le cadre du cours de Design Web.</div>
                </div>
            </div>
            <div class="project__card">
                <div class="project__card__figure">
                    <img class="project__card__image" src="" alt="">
                </div>
                <div class="project__card__body">
                    <div class="project__card__title">Le Portfolio</div>
                    <div class="project__card__copy">Création d’un Portfolio utilisant Wordpress dans le cadre du cours de Design Web.</div>
                </div>
            </div>
            <div class="project__card project__card--reversed">
                <div class="project__card__figure">
                    <img class="project__card__image" src="" alt="">
                </div>
                <div class="project__card__body">
                    <div class="project__card__title">Logic Circles</div>
                    <div class="project__card__copy">Recréation du jeu android Logic Circle grâce au langage typescript et à l'utilisation de l'API Canvas.</div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>