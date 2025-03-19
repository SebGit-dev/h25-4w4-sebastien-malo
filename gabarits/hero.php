<?php $hero_background = get_theme_mod('hero_background', ''); ?>
<?php $hero_auteur = get_theme_mod('hero_auteur', ''); ?>
<?php $hero_hero_courriel = get_theme_mod('hero_hero_courriel', ''); ?>
<?php $hero_color_text = get_theme_mod('hero_color_text', ''); ?>

<section class="hero" style="background-image: linear-gradient(90deg, rgba(0, 100, 205, 0.8), rgba(0, 212, 255, 0.2)), url(<?php echo $hero_background ?>); color: <?php echo $hero_color_text ?>;">
    <div class="hero__contenu global">
        <h1 class="hero__titre"><?php bloginfo('name'); ?></h1>
        <p class="hero__description">
            <?php bloginfo('description') ?>
        </p>
        <p class="hero__courriel">
            <?php bloginfo('admin_email') ?>
        </p>
        <p class="hero__adresse">
            Romeo Vachon Blvd N Arrivées, Dorval, Quebec H4Y 1H1
        </p>
        <p class="hero__telephone">
            +1 800-465-1213
        </p>
        <p>Sebastien Malo</p>
        <?php get_template_part( 'gabarits/icones' ); ?>
    </div>
</section>