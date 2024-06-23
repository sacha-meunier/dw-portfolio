<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Portfolio - Sacha Meunier</title>
    <?php /*wp_head(); */?>
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
<header class="header" role="banner">
    <div class="header__wrapper">
        <h1>
            <a class="header__logo" href="<?= esc_url(home_url('/')); ?>" aria-label="Zekiah - homepage">
                <svg class="header__logo-item" width="18" height="22" viewBox="0 0 18 22" fill="red"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.8574 0L0 4.06981L4.31441 5.91274L10.0291 4.33857L5.44978 12.5934L10.3319 22L17.3333 4.33857L13.2082 7.33333L10.0291 13.3229L9.23435 11.6719L15.8574 0Z"/>
                </svg>
                <span class="header__logo-text">Zekiah</span>
            </a>
        </h1>

        <nav class="header__nav" role="navigation" aria-label="Primary">
            <h2 class="sro">Navigation</h2>
            <ul class="header__nav-list">
                <li class="header__nav-item"><a class="header__nav-link" href="<?= esc_url(home_url('/')); ?>">Accueil</a></li>
                <li class="header__nav-item"><a class="header__nav-link" href="<?= esc_url(home_url('/')); ?>#services">Services</a></li>
                <li class="header__nav-item"><a class="header__nav-link" href="<?= esc_url(get_projects_page_url()); ?>">Projets</a></li>
                <li class="header__nav-item"><a class="header__nav-link" href="<?= esc_url(home_url('/')); ?>#training">Formations</a></li>
            </ul>
        </nav>

        <div class="header__buttons">
            <a class="header__contact" href="<?= esc_url(get_contact_page_url()); ?>">Contact</a>

            <div class="nav-toggler">
                <input class="nav-toggler__input" id="toggler" type="checkbox" aria-controls="primary-nav" aria-expanded="false"/>

                <label class="nav-toggler__label" for="toggler" aria-label="Toggle navigation">
                    <span class="nav-toggler__line"></span>
                    <span class="nav-toggler__line"></span>
                </label>

                <nav class="nav-toggler__nav" id="primary-nav" role="navigation" aria-label="Mobile navigation">
                    <h2 class="sro">Navigation</h2>
                    <ul class="nav-toggler__list">
                        <li class="nav-toggler__item"><a class="nav-toggler__link" href="<?= esc_url(home_url('/')); ?>">Accueil</a></li>
                        <li class="nav-toggler__item"><a class="nav-toggler__link" href="<?= esc_url(home_url('/')); ?>#services">Services</a></li>
                        <li class="nav-toggler__item"><a class="nav-toggler__link" href="<?= esc_url(get_projects_page_url()); ?>">Projets</a></li>
                        <li class="nav-toggler__item"><a class="nav-toggler__link" href="<?= esc_url(home_url('/')); ?>#formations">Formations</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<main>