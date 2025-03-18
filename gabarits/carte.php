<?php
/**
 * Template-part carte
 */
?>
<article class="carte carte--grande">
  <div class="carte__contenu">
    <?php 
        if (has_post_thumbnail()) {
        the_post_thumbnail('thumbnail'); } 
    ?>
    <h2 class="carte__titre"><?php the_title(); ?></h2>
    <p class="carte__description"><?php echo wp_trim_words(get_the_content(),20, " ... " ); ?></p>
    <div class="carte__contenu__infos">
      <div>
        <h4>Categories</h4>
        <?php the_category() ?>
      </div>
      <div>
      <h4>Temperatures</h4>
        <div class="type_temperature">
          <p>Max: <?php the_field('temperature_maximum');?> C</p>
          <p>Min: <?php the_field('temperature_maximum');?> C</p>
          <p>Moy: <?php the_field('temperature_maximum');?> C</p>
        </div>
      </div>
    </div>
    
    <a class="carte__bouton carte__bouton--actif" href="<?php the_permalink() ?>">Suite</a>
  </div>
</article>