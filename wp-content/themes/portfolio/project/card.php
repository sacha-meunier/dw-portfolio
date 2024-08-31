<a class="project__card" data-animate="slide-left-fade" href="<?php the_permalink(); ?>">
    <div class="project__card__figure">
            <img class="project__card__image" data-animate="fade-in" src="#" alt="<?php the_title(); ?>">
    </div>
    <div class="project__card__body">
        <div class="project__card__title" data-animate="slide-left-fade"><?php the_title(); ?></div>
        <div class="project__card__copy" data-animate="slide-left-fade"><?php the_field('project_description'); ?></div>
    </div>
</a>