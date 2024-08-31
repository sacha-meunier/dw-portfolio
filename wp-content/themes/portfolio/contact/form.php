<?php
$errors = $_SESSION['form_errors'] ?? [];
unset($_SESSION['form_errors']);
?>

<form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
    <input type="hidden" name="action" value="contact_form">
    <fieldset class="contact-form">
        <legend class="sro">Formulaire de contact</legend>
        <div class="contact-form__group">
            <label class="contact-form__label" data-animate="slide-up-fade" for="name"><?= get_field('contact_label1'); ?></label>
            <input class="contact-form__input" data-animate="slide-up-fade" type="text" id="name" name="name"
                   placeholder="<?= get_field('contact_placeholder1'); ?>"
                   required>
            <?php if (!empty($errors)): ?>
                <p class="form-error"><?php echo $errors['name'] ?? ''; ?></p>
            <?php endif; ?>
        </div>
        <div class="contact-form__group">
            <label class="contact-form__label" data-animate="slide-up-fade" for="email"><?= get_field('contact_label2'); ?></label>
            <input class="contact-form__input" data-animate="slide-up-fade" type="email" id="email" name="email"
                   placeholder="<?= get_field('contact_placeholder2'); ?>" required>
            <?php if (!empty($errors)): ?>
                <p class="form-error"><?php echo $errors['email'] ?? ''; ?></p>
            <?php endif; ?>
        </div>
        <div class="contact-form__group">
            <label class="contact-form__label" data-animate="slide-up-fade" for="message"><?= get_field('contact_label3'); ?></label>
            <textarea class="contact-form__input contact-form__textarea" data-animate="slide-up-fade" id="message" name="message"
                      placeholder="<?= get_field('contact_placeholder3'); ?>"
                      required></textarea>
            <?php if (!empty($errors)): ?>
                <p class="form-error"><?php echo $errors['message'] ?? ''; ?></p>
            <?php endif; ?>
        </div>
        <button class="button" data-animate="slide-up-fade" type="submit"><?= get_field('contact_cta'); ?></button>
    </fieldset>
</form>