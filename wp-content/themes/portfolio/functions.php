<?php

// Désactiver l'éditeur de texte Gutenberg de Wordpress :
add_filter('use_block_editor_for_post', '__return_false');

// Fonctions propres au thème :

// Charger un fichier "public" (asset/image/css/script/...) pour le front-end.
function dw_asset(string $file): string
{
    return get_template_directory_uri() . '/public/' . $file;
}

// Définir la constante pour le répertoire des assets
define('THEME_ASSETS', get_template_directory_uri() . '/../../dist');

// Fonction pour enregistrer et ajouter les styles et scripts
function enqueue_theme_assets()
{
    // Enregistrer le fichier CSS principal
    wp_enqueue_style('main-css', THEME_ASSETS . '/css/main.css', array(), '1.0', 'all');

    // Enregistrer le fichier JavaScript principal
    wp_enqueue_script('main-js', THEME_ASSETS . '/js/main.js', array(), '1.0', true);
}

// Action pour ajouter les styles et scripts
add_action('wp_enqueue_scripts', 'enqueue_theme_assets');

// Fonction pour obtenir l'URL de la page de contact
function get_contact_page_url() {
    $contact_page = get_page_by_path('contact');
    if ($contact_page) {
        return get_permalink($contact_page->ID);
    } else {
        return '#';
    }
}
