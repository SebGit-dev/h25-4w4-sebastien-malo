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
          <p>Max: <?= single_post_temperature('temperature_maximum', 25, 40); ?> C&#176;</p>
          <p>Min: <?= single_post_temperature('temperature_minimum', 0, 25); ?> C&#176;</p>
          <p>Moy: <?= single_post_temperature('temperature_moyenne', 10, 30); ?> C&#176;</p>
        </div>
      </div>
    </div>
    
    <a class="carte__bouton carte__bouton--actif" href="<?php the_permalink() ?>">Suite</a>
  </div>
</article>