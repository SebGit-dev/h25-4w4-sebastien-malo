<?php
/*
Template Name: Template Pays
*/
get_header();
?>

<section class="populaire">
    <div class="global">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article>
                    <h2><?php the_title(); ?></h2>
                    <div><?php the_content(); ?></div>
                </article>
        <?php endwhile;
        endif; ?>
    </div>
</section>

<?php 
genere_vague();
?>
 
<!-- Rest API -->
<section class="destination__pays">
    <?php categories_liste("destination"); ?>
    <h2 class="destination__pays__titre">Destinations du Pays</h2>
    <div class="destination__pays__list"></div>
</section>
<?php get_footer(); ?>


 

