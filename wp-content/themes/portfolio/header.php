<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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

    <?php wp_head(); ?>
</head>

<body>

<noscript>
    <p class="no-js__message">
        Pour accéder à toutes les fonctionnalités de ce site, vous devez activer JavaScript.<br>
        Voici les <a href="https://www.enable-javascript.com/fr/" title="vers le site enable-javascript">instructions
            pour activer JavaScript dans votre navigateur Web</a>.
    </p>
</noscript>
<input id="scheme-color" type="checkbox" aria-label="hidden">

<?= get_template_part('components/navigation'); ?>

<main>