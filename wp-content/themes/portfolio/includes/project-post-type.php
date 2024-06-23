<?php
// Function to register the Custom Post Type 'Project'.
function register_project_post_type(): void
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

