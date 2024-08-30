<aside class="contact-page__aside">
    <div class="contact-info">
        <h2 class="contact-info__title"><?= get_field('contact_aside_title1'); ?></h2>
        <p class="contact-info__details"><?= get_field('contact_aside_copy1'); ?></p>
    </div>
    <div class="social-media">
        <h2 class="contact-info__title">Réseaux sociaux</h2>
        <ul class="footer__social-list">
            <li><a class="footer__social-logo-link" href="<?= get_field('contact_social_url1'); ?>"><img
                        class="footer__social-logo-item" loading="lazy"
                        src="<?= dw_asset('content/images/icon-github.svg'); ?>"
                        alt="Icône de Github" width="18" height="18"></a></li>
            <li><a class="footer__social-logo-link" href="<?= get_field('contact_social_url2'); ?>"><img
                        class="footer__social-logo-item" loading="lazy"
                        src="<?= dw_asset('content/images/icon-codepen.svg'); ?>"
                        alt="Icône de Codepen" width="18" height="18"></a></li>
            <li><a class="footer__social-logo-link" href="<?= get_field('contact_social_url3'); ?>"><img
                        class="footer__social-logo-item" loading="lazy"
                        src="<?= dw_asset('content/images/icon-dribble.svg')?>"
                        alt="Icône de Dribbble" width="18" height="18"></a></li>
            <li><a class="footer__social-logo-link" href="<?= get_field('contact_social_url4'); ?>"><img
                        class="footer__social-logo-item" loading="lazy"
                        src="<?= dw_asset('content/images/icon-twitter.svg')?>"
                        alt="Icône de Twitter" width="18" height="18"></a></li>
        </ul>
    </div>
</aside>