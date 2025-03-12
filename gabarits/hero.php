<?php $hero_background = get_theme_mod('hero_background', ''); ?>
<?php $hero_auteur = get_theme_mod('hero_auteur', ''); ?>
<?php $hero_hero_courriel = get_theme_mod('hero_hero_courriel', ''); ?>
<?php $hero_color_text = get_theme_mod('hero_color_text', ''); ?>

<section class="hero" style="background-image: url(<?php echo $hero_background ?>); color: <?php echo $hero_color_text ?>;">
    <div class="hero__contenu global">
        <h1 class="hero__titre"><?php bloginfo('name'); ?></h1>
        <p class="hero__description">
            <?php bloginfo('description') ?>
        </p>
        <p class="hero__courriel">
            <?php bloginfo('admin_email') ?>
        </p>
        <p class="hero__adresse">
            5800 Sherbrooke-est - Montréal (Québec) H1X 2A2
        </p>
        <p><?php echo $hero_auteur ?></p>
        <?php get_template_part( 'gabarits/icones' ); ?>
    </div>
</section>