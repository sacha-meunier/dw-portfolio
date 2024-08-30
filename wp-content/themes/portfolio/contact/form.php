<form action="#" method="post" class="contact-form">
    <div class="contact-form__group">
        <label class="contact-form__label" for="name"><?= get_field('contact_label1'); ?></label>
        <input class="contact-form__input" type="text" id="name" name="name" placeholder="<?= get_field('contact_placeholder1'); ?>"
               required>
    </div>
    <div class="contact-form__group">
        <label class="contact-form__label" for="email"><?= get_field('contact_label2'); ?></label>
        <input class="contact-form__input" type="email" id="email" name="email"
               placeholder="<?= get_field('contact_placeholder2'); ?>" required>
    </div>
    <div class="contact-form__group">
        <label class="contact-form__label" for="details"><?= get_field('contact_label3'); ?></label>
        <textarea class="contact-form__input contact-form__textarea" id="details" name="details"
                  placeholder="<?= get_field('contact_placeholder3'); ?>"
                  required></textarea>
    </div>
    <button class="button" type="submit">
        <?= get_field('contact_cta'); ?>
    </button>
</form>