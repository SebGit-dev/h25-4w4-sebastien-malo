    <?php get_header(); ?>
    <!-- <h1>-------- INDEX.PHP ----------</h1> -->
    <section class="populaire">
        <div class="global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="single_post">
            <?php 
                if (has_post_thumbnail()) {
                the_post_thumbnail('large'); } 
            ?>
                <h2><?php the_title(); ?></h2>
                <div><?php the_content() ?>
                <div class="single_post__categorie">
                    <h6 class="single_post__categorie__titre">Catégories: </h6>
                    <?= the_category(); ?>
                </div>
                <div class="single_post_temperature">
                    <p>Temperature maximum: <?= single_post_temperature('temperature_maximum', 25, 40); ?> C&#176;</p>
                    <p>Temperature minimum: <?= single_post_temperature('temperature_minimum', 0, 25); ?> C&#176;</p>
                    <p>Temperature moyenne: <?= single_post_temperature('temperature_moyenne', 10, 30); ?> C&#176;</p>
                </div>
                <div class="single_post_destination_infos">
                    <p>Auteur: <?php the_author(); ?></p>
                    <p>Date de publication : <?php the_date(); ?></p>
                </div>
            </article>
            <?php endwhile; endif; ?>
        </div>
    </section>
    <?php get_footer(); ?>
   
</body>
</html>