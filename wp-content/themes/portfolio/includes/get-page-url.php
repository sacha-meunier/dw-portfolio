<?php
function get_contact_page_url(): bool|string
{
    $contact_page = get_page_by_path('contact');
    if ($contact_page) {
        return get_permalink($contact_page->ID);
    } else {
        return '#';
    }
}

function get_projects_page_url(): bool|string
{
    $projects_page = get_page_by_path('projects');
    if ($projects_page) {
        return get_permalink($projects_page->ID);
    } else {
        return '#';
    }
}