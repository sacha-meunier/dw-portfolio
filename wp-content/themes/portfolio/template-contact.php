<?php /* Template Name: Contact page template */ ?>
<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <section class="contact-page">
        <h1 class="contact-page__title" data-animate="fade-in"><?= get_field('contact_title'); ?></h1>

        <div class="contact-page__content">
            <?= get_template_part('contact/form'); ?>
            <?= get_template_part('contact/aside'); ?>
        </div>
    </section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>