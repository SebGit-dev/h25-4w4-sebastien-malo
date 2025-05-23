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
                <div class="single_post_temperature">
                    <p>Temperature maximum: <?php the_field('temperature_maximum');?> C&#176;</p>
                    <p>Temperature minimum: <?php the_field('temperature_minimum');?> C&#176;</p>
                    <p>Temperature moyenne: <?php the_field('temperature_moyenne');?> C&#176;</p>
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