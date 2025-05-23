<?php $rest_api_wave_color = get_theme_mod('rest_api_wave_color', 'ffffff'); ?>

<?php
/*
Template Name: Template Pays
*/
get_header();
?>

<div class="page_pays">
    <section class="populaire">
        <div class="global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article>
                        <h2><?php the_title(); ?></h2>
                        <h6>Date:
                        <?php the_field('date'); ?></h6>
                        <h6>Coordonnées du site:
                        <?php the_field('coordonnees_pays'); ?></h6>
                        <h6>conférencier du site:
                        <?php the_field('conferencier'); ?></h6>
                        <div><?php the_content(); ?></div>
                    </article>
            <?php endwhile;
            endif; ?>
        </div>
    </section>

    <?php 
    genere_vague($rest_api_wave_color);
    ?>
    
    <!-- Rest API -->
    <section class="destination">
        <?php categories_liste("destination"); ?>
        <h2 class="destination__titre">Articles de la catégorie</h2>
        <div class="destination__list"></div>
    </section>

    <?php get_footer(); ?>
</div>




 

