<?php
/* Template Name: Page de Contact */
?>

<?php
if (function_exists('get_field')) {
    if (is_page('Contact')) {
        $contact_title = get_field('contact_title');
        $contact_label1 = get_field('contact_label1');
        $contact_placeholder1 = get_field('contact_placeholder1');
        $contact_label2 = get_field('contact_label2');
        $contact_placeholder2 = get_field('contact_placeholder2');
        $contact_label3 = get_field('contact_label3');
        $contact_placeholder3 = get_field('contact_placeholder3');
        $contact_cta = get_field('contact_cta');
        $contact_aside_title1 = get_field('contact_aside_title');
        $contact_aside_copy1 = get_field('contact_aside_copy');
        $contact_social_url1 = get_field('contact_social_url1');
        $contact_social_url2 = get_field('contact_social_url2');
        $contact_social_url3 = get_field('contact_social_url3');
        $contact_social_url4 = get_field('contact_social_url4');
    }
}
?>

<?php get_header(); ?>
    <section class="contact-page">
        <h1 class="contact-page__title"><?= $contact_title ?></h1>
        <div class="contact-page__content">
            <form class="contact-form">
                <div class="contact-form__group">
                    <label class="contact-form__label" for="name"><?= $contact_label1 ?></label>
                    <input class="contact-form__input" type="text" id="name" name="name" placeholder="<?= $contact_placeholder1 ?>"
                           required>
                </div>
                <div class="contact-form__group">
                    <label class="contact-form__label" for="email"><?= $contact_label2 ?></label>
                    <input class="contact-form__input" type="email" id="email" name="email"
                           placeholder="<?= $contact_placeholder2 ?>" required>
                </div>
                <div class="contact-form__group">
                    <label class="contact-form__label" for="details"><?= $contact_label3 ?></label>
                    <textarea class="contact-form__input contact-form__textarea" id="details" name="details"
                              placeholder="<?= $contact_placeholder3 ?>"
                              required></textarea>
                </div>
                <button class="button" type="submit">
                    <?= $contact_cta ?>
                </button>
            </form>

            <aside class="contact-page__aside">
                <div class="contact-info">
                    <h2 class="contact-info__title"><?= $contact_aside_title1 ?></h2>
                    <p class="contact-info__details"><?= $contact_aside_copy1 ?></p>
                </div>
                <div class="social-media">
                    <h2 class="contact-info__title">Réseaux sociaux</h2>
                    <ul class="footer__social-list">
                        <li><a class="footer__social-logo-link" href="<?= $contact_social_url1 ?>"><img
                                        class="footer__social-logo-item" loading="lazy"
                                        src="<?= dw_asset('content/images/icon-github.svg')?>"
                                        alt="Icône de Github" width="18" height="18"></a></li>
                        <li><a class="footer__social-logo-link" href="<?= $contact_social_url2 ?>"><img
                                        class="footer__social-logo-item" loading="lazy"
                                        src="<?= dw_asset('content/images/icon-codepen.svg')?>"
                                        alt="Icône de Codepen" width="18" height="18"></a></li>
                        <li><a class="footer__social-logo-link" href="<?= $contact_social_url3 ?>"><img
                                        class="footer__social-logo-item" loading="lazy"
                                        src="<?= dw_asset('content/images/icon-dribble.svg')?>"
                                        alt="Icône de Dribbble" width="18" height="18"></a></li>
                        <li><a class="footer__social-logo-link" href="<?= $contact_social_url4 ?>"><img
                                        class="footer__social-logo-item" loading="lazy"
                                        src="<?= dw_asset('content/images/icon-twitter.svg')?>"
                                        alt="Icône de Twitter" width="18" height="18"></a></li>
                    </ul>
                </div>
            </aside>
        </div>
    </section>
<?php get_footer(); ?>
