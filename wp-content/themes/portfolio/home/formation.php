<section class="services training" id="training">
    <h2 class="section__heading"><?= get_field('home_formation_title'); ?></h2>
    <p class="section__copy"><?= get_field('home_formation_copy'); ?></p>

    <div class="services__wrapper">

        <div class="services__card">
            <div class="services__card__date"><?= get_field('home_formation_card1_date'); ?></div>
            <div class="services__card__body">
                <div class="services__card__title"><?= get_field('home_formation_card1_title'); ?></div>
                <div class="services__card__copy"><?= get_field('home_formation_card1_copy'); ?></div>
            </div>
        </div>

        <div class="services__card">
            <div class="services__card__date"><?= get_field('home_formation_card2_date'); ?></div>
            <div class="services__card__body">
                <div class="services__card__title"><?= get_field('home_formation_card2_title'); ?></div>
                <div class="services__card__copy"><?= get_field('home_formation_card2_copy'); ?></div>
            </div>
        </div>

        <div class="services__card">
            <div class="services__card__date"><?= get_field('home_formation_card3_date'); ?></div>
            <div class="services__card__body">
                <div class="services__card__title"><?= get_field('home_formation_card3_title'); ?></div>
                <div class="services__card__copy"><?= get_field('home_formation_card3_copy'); ?></div>
            </div>
        </div>
    </div>
</section>