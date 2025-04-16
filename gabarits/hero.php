<?php $hero_auteur = get_theme_mod('hero_auteur', ''); ?>
<?php $hero_hero_courriel = get_theme_mod('hero_hero_courriel', ''); ?>
<?php $hero_color_text = get_theme_mod('hero_color_text', ''); ?>

<?php  
    $hero_auteur = get_theme_mod('hero_auteur', 'Default Title');
    for ($k=0; $k<3; $k++){
    $hero_background[$k] = get_theme_mod('hero_background_'. $k, '');
    }
     ?>
        <section class="hero" style="color: <?php echo $hero_color_text ?>;">
            <div class="hero__carrousel" style="background-image: url(<?php echo $hero_background[0] ?>)"></div>
            <div class="hero__carrousel" style="background-image: url(<?php echo $hero_background[1] ?>)"></div>
            <div class="hero__carrousel" style="background-image: url(<?php echo $hero_background[2] ?>)"></div>
            <div class="hero__radio">
                <input  class="hero__radio__input" data-id_radio="0"   type="radio" name="carroussel"  checked="checked">
                <input  class="hero__radio__input" data-id_radio="1" type="radio" name="carroussel">
                <input  class="hero__radio__input" data-id_radio="2" type="radio" name="carroussel">
            </div>
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