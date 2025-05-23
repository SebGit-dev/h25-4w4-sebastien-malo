<?php $hero_auteur = get_theme_mod('hero_auteur', ''); ?>
<?php $hero_hero_courriel = get_theme_mod('hero_hero_courriel', ''); ?>
<?php $hero_color_text = get_theme_mod('hero_color_text', ''); ?>
<?php $hero_couleur_icones = get_theme_mod('hero_couleur_icones', 'ffffff'); ?>
<?php $hero_nombre_images_carrousel = get_theme_mod('hero_nombre_images_carrousel', '1'); ?>

<?php
$hero_nb_icones = get_theme_mod('hero_nb_icones', 1);

for ($k = 0; $k < $hero_nb_icones; $k++) {
    $hero_icones[$k] = get_theme_mod('hero_icones_' . $k, 'wordpress');
}

for ($k = 0; $k < $hero_nb_icones; $k++) {
    $hero_lien_reseaux[$k] = get_theme_mod('hero_lien_reseaux_' . $k, 'https://github.com/SebGit-dev/h25-4w4-sebastien-malo/tree/tp2-seb');
}
?>

<?php  
    $hero_auteur = get_theme_mod('hero_auteur', 'Default Title');
    for ($k=0; $k<3; $k++){
    $hero_background[$k] = get_theme_mod('hero_background_'. $k, '');
    }
     ?>
        <section class="hero" style="color: <?php echo $hero_color_text ?>;">
            <?php
            for ($k = 0; $k < $hero_nombre_images_carrousel; $k++) { ?>
                <div class="hero__carrousel" style="background-image: url(<?php echo $hero_background[$k]; ?>);"></div>
            <?php } ?>

            <div class="hero__radio">
                <?php
                for ($k = 0; $k < $hero_nombre_images_carrousel; $k++) {
                    if ($k == 0) { ?>
                        <div class="hero__radio__container">
                            <input class="hero__radio__input" data-id_radio="<?php echo $k; ?>" type="radio" name="carrousel" checked>
                            <label for="carrousel<?php echo $k; ?>"><img src="" alt=""></label>
                        </div>
                    <?php } else { ?>
                        <div class="hero__radio__container">
                            <input class="hero__radio__input" data-id_radio="<?php echo $k; ?>" type="radio" name="carrousel">
                            <label for="carrousel<?php echo $k; ?>"><img src="" alt=""></label>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>

            <div class="hero__contenu global">
                <div class="hero__animation actif">
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
                    <?php
                        for ($k = 0; $k < $hero_nb_icones; $k++) {
                            echo genere_icone($hero_icones[$k], $hero_lien_reseaux[$k], $hero_couleur_icones);
                        }
                    ?>
                </div>
                <div class="hero__animation">
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
                    <?php
                        for ($k = 0; $k < $hero_nb_icones; $k++) {
                            echo genere_icone($hero_icones[$k], $hero_lien_reseaux[$k], $hero_couleur_icones);
                        }
                    ?>
                </div>
                <div class="hero__animation">
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
                    <?php
                        for ($k = 0; $k < $hero_nb_icones; $k++) {
                            echo genere_icone($hero_icones[$k], $hero_lien_reseaux[$k], $hero_couleur_icones);
                        }
                    ?>
                </div>
            </div>
        </section>