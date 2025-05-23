<?php $footer_mission = get_theme_mod('footer_mission', ''); ?>
<?php $footer_adresse = get_theme_mod('footer_adresse', ''); ?>
<?php $footer_telephone = get_theme_mod('footer_telephone', ''); ?>
<?php $footer_courriel = get_theme_mod('footer_courriel', ''); ?>
<?php $footer_destination_titre = get_theme_mod('footer_destination_titre', ''); ?>
<?php $footer_destination_img = get_theme_mod('footer_destination_img', ''); ?>
<?php 
genere_vague();
?>
<footer>
    <div class="piedpage global">
        <section class="piedpage__s1">
            <div class="piedpage__s1__externe">
                <?php wp_nav_menu(array(
                    "menu" => "externe",
                    "container" => "nav",
                ));
                
                ?>
            </div>
            <div class="piedpage__s1__adresse">
                <div class="piedpage__s1__adresse__coord">
                    Recherche de pays a visiter
                </div>

                <div class="piedpage__s1__adresse__recherche">
                    <?php get_search_form(); ?>
                </div>

                <div class="piedpage__s1__adresse__destination">
                    <div class="piedpage__s1__adresse__destination__titre">
                        <?php echo $footer_destination_titre; ?>
                    </div>
                    <img class="piedpage__s1__adresse__destination__img" src="<?php echo $footer_destination_img; ?>" alt="">
                </div>
            </div>
            <div class="piedpage__s1__infos">
                <p>Siège social, 7373 Boul de la Côte-Vertu, Montréal (Saint-Laurent)</p>
                <p>1 (888) 247-2262</p>
                <p>admin@gftnth00.mywhc.ca</p>
            </div>
            <div class="piedpage__s1__description">
            Notre mission est d’inspirer et de faciliter l’organisation de voyages inoubliables en offrant une plateforme intuitive et complète. Nous aidons les voyageurs à découvrir des destinations de rêve, à comparer les meilleures offres et à réserver facilement des hébergements, activités et transports.
            Grâce à des recommandations personnalisées, des avis authentiques et des guides détaillés, nous accompagnons chaque voyageur dans la création d’une expérience sur mesure, qu’il s’agisse d’une escapade relaxante, d’une aventure exaltante ou d’un séjour en famille.
            Nous nous engageons à rendre les vacances accessibles, agréables et sans stress, en proposant un service fiable et transparent, afin que chaque voyage devienne un souvenir mémorable.
            </div>
        </section>
    </div>
</footer>
<?php get_footer() ?>
<?php wp_footer() ?>