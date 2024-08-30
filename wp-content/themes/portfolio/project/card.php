<a class="project__card" href="<?php the_permalink(); ?>">
    <div class="project__card__figure">
            <img class="project__card__image" src="#" alt="<?php the_title(); ?>">
    </div>
    <div class="project__card__body">
        <div class="project__card__title"><?php the_title(); ?></div>
        <div class="project__card__copy"><?php the_field('project_description'); ?></div>
    </div>
</a>