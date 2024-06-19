<?php
/* Template Name: Page de Contact */
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Portfolio - Sacha Meunier</title>
    <link rel="stylesheet" href="../../../dist/css/main.css">
    <meta name="author" content="Sacha Meunier">
    <meta name="description"
          content="Bienvenue sur mon Portfolio en tant que web developer. Découvrez mes projets, ma formation et mes compétences.">
    <meta name="keywords"
          content="web developer, développement web, développeur web, développeur front-end, développeur back-end, développement d’applications web, UX, UI, UX/UI, HTML, CSS, JavaScript, PHP, Git, programmation">
    <meta property="og:url" content="https://sacha-meunier.com">
    <meta property="og:title" content="Portfolio - Sacha Meunier">
    <meta property="og:type" content="website">
    <meta property="og:description"
          content="Bienvenue sur mon Portfolio en tant que web developer. Découvrez mes projets, ma formation et mes compétences.">
    <meta property="og:image" content="/content/images/logo-menu.svg">
    <meta property="og:image:alt" content="Le logo de Sacha Meunier"/>

    <link rel="icon" type="image/svg+xml" href="../../../favicon.svg"/>
    <link rel="alternate icon" href="/favicon.ico"/>
</head>

<body>
<input id="scheme-color" type="checkbox" aria-label="hidden">
<?php get_header(); ?>

<main>
    <section class="contact-page">
        <h1 class="contact-page__title">Donnons vie à vos projets dès maintenant</h1>
        <div class="contact-page__content">
            <form class="contact-form">
                <div class="contact-form__group">
                    <label class="contact-form__label" for="name">Votre Nom:</label>
                    <input class="contact-form__input" type="text" id="name" name="name" placeholder="Sacha Meunier"
                           required>
                </div>
                <div class="contact-form__group">
                    <label class="contact-form__label" for="email">Votre Email:</label>
                    <input class="contact-form__input" type="email" id="email" name="email"
                           placeholder="contact@zekiah.com" required>
                </div>
                <div class="contact-form__group">
                    <label class="contact-form__label" for="details">Détails du projet:</label>
                    <textarea class="contact-form__input contact-form__textarea" id="details" name="details"
                              placeholder="Un bref résumé, la deadline, les objectifs, etc."
                              required></textarea>
                </div>
                <button class="button" type="submit">
                    Contactez-moi
                </button>
            </form>

            <aside class="contact-page__aside">
                <div class="contact-info">
                    <h2 class="contact-info__title">Information de contact</h2>
                    <p class="contact-info__details">contact@zekiah.com</p>
                </div>
                <div class="social-media">
                    <h2 class="contact-info__title">Réseaux sociaux</h2>
                    <ul class="footer__social-list">
                        <li><a class="footer__social-logo-link" href="https://www.github.com/sacha-meunier"><img
                                        class="footer__social-logo-item" loading="lazy"
                                        src="<?= dw_asset('content/images/icon-github.svg')?>"
                                        alt="Icône de Github" width="18" height="18"></a></li>
                        <li><a class="footer__social-logo-link" href="https://codepen.io/sacha-meunier"><img
                                        class="footer__social-logo-item" loading="lazy"
                                        src="<?= dw_asset('content/images/icon-codepen.svg')?>"
                                        alt="Icône de Codepen" width="18" height="18"></a></li>
                        <li><a class="footer__social-logo-link" href="https://dribbble.com/Zekiahs"><img
                                        class="footer__social-logo-item" loading="lazy"
                                        src="<?= dw_asset('content/images/icon-dribble.svg')?>"
                                        alt="Icône de Dribbble" width="18" height="18"></a></li>
                        <li><a class="footer__social-logo-link" href="https://twitter.com/ZekiahVFX"><img
                                        class="footer__social-logo-item" loading="lazy"
                                        src="<?= dw_asset('content/images/icon-twitter.svg')?>"
                                        alt="Icône de Twitter" width="18" height="18"></a></li>
                    </ul>
                </div>
            </aside>
        </div>
    </section>

</main>
<?php get_footer(); ?>
<script src="../../../dist/js/main.js"></script>
</body>
</html>
