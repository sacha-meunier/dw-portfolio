<?php

require_once(__DIR__ . '/src/ContactForm.php');
require_once(__DIR__ . '/includes/asset-public.php');
require_once( __DIR__ . '/includes/disable-gutenberg.php');
require_once( __DIR__ . '/includes/admin-bar.php');
require_once( __DIR__ . '/includes/title-tag.php');
require_once(__DIR__ . '/includes/post-types.php');
require_once( __DIR__ . '/includes/get-page-url.php');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}