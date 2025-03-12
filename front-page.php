    <?php get_header(); ?>
    <!-- <h1>-------- FRONT-PAGE.PHP ----------</h1> -->
     <?php 
    $hero_auteur = get_theme_mod('hero_auteur', 'Sebastien Malo');
    $hero_background = get_theme_mod('hero_background', '');
    ?>
    <?php get_template_part( 'gabarits/hero' ); ?>
    <section class="populaire">
        <div class="global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); 
            if (in_category("galerie"))  {
                the_content() ;
            } else {    ?>
                <?php get_template_part( 'gabarits/carte' ); ?>
            <?php } ?>
            <?php endwhile; endif; ?>
        </div>
    </section>
    <?php get_footer(); ?>
</body>
</html>