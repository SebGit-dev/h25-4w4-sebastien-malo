<?php $footer_mission = get_theme_mod('footer_mission', ''); ?>
<?php $footer_adresse = get_theme_mod('footer_adresse', ''); ?>
<?php $footer_telephone = get_theme_mod('footer_telephone', ''); ?>

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
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro, id.
                </div>
                <div class="piedpage__s1__adresse__recherche">
                    <?php get_search_form(); ?>
                </div>
            </div>
            <div class="piedpage__s1__description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim saepe facere maxime repudiandae libero laboriosam doloremque. Tenetur iure nesciunt iste ducimus in nisi cum fugiat dignissimos totam doloremque pariatur exercitationem tempora earum quia, architecto aliquam esse laboriosam maiores nulla error laudantium, dolorem fuga. Recusandae nihil mollitia ex doloribus laboriosam aliquid.
            </div>
        </section>
    </div>
</footer>
<?php get_footer() ?>
<?php wp_footer() ?>