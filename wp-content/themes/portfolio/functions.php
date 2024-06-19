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
// Fonction pour obtenir l'URL de la page des projets
function get_projects_page_url() {
    $projects_page = get_page_by_path('projects');
    if ($projects_page) {
        return get_permalink($projects_page->ID);
    } else {
        return '#';
    }
}

// Fonction pour enregistrer le Custom Post Type 'Project'
function register_project_post_type()
{
    $labels = array(
        'name' => _x('Projects', 'post type general name', 'Portfolio'),
        'singular_name' => _x('Project', 'post type singular name', 'Portfolio'),
        'menu_name' => _x('Projects', 'admin menu', 'Portfolio'),
        'name_admin_bar' => _x('Project', 'add new on admin bar', 'Portfolio'),
        'add_new' => _x('Add New', 'project', 'Portfolio'),
        'add_new_item' => __('Add New Project', 'Portfolio'),
        'new_item' => __('New Project', 'Portfolio'),
        'edit_item' => __('Edit Project', 'Portfolio'),
        'view_item' => __('View Project', 'Portfolio'),
        'all_items' => __('All Projects', 'Portfolio'),
        'search_items' => __('Search Projects', 'Portfolio'),
        'parent_item_colon' => __('Parent Projects:', 'Portfolio'),
        'not_found' => __('No projects found.', 'Portfolio'),
        'not_found_in_trash' => __('No projects found in Trash.', 'Portfolio')
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'project'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments')
    );

    register_post_type('project', $args);
}

add_action('init', 'register_project_post_type');
