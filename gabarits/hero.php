<section class="hero" style="background-image: url(<?php echo $hero_background ?>)">
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