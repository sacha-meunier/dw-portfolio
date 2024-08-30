<section class="hero">
    <h1 class="hero__title"><?= get_field('home_hero_title'); ?></h1>
    <div class="hero__location">
        <svg width="18" height="18" fill="#0F0928" xmlns="http://www.w3.org/2000/svg">
            <path d="m9 17.796-4.773-4.773a6.75 6.75 0 1 1 9.546 0L9 17.796zm3.713-5.834a5.25 5.25 0 1 0-7.425 0L9 15.675l3.713-3.713zM9 9.75a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
        </svg>
        <span><?= get_field('home_hero_location'); ?></span>
    </div>
    <div class="hero__copy"><?= get_field('home_hero_copy'); ?>
    </div>
</section>