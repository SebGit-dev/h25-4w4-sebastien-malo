<?php $erreur_background = get_theme_mod('erreur_background', ''); ?>
<?php $erreur_color_text = get_theme_mod('erreur_color_text', ''); ?>
<?php $erreur_titre = get_theme_mod('erreur_titre', ''); ?>
<?php $erreur_description = get_theme_mod('erreur_description', ''); ?>

<?php get_header(); ?>
    <!-- <h1>-------- 404.PHP Moncerrat----------</h1> -->
    <div class="erreur" style="background-image: url(<?php echo $erreur_background ?>); color: <?php echo $erreur_color_text ?>;">
        <h1 class="erreur__titre"><?php echo $$erreur_titre ?></h1>
        <p class="erreur__description"><?php echo $$erreur_description ?></p>
        <div class="erreur__retour_menu"></div>
        <div class="erreur__menu"></div>
    </div>
<?php get_footer(); ?>