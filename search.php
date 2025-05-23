<?php
/**
 * Modèle pour les résultats de recherche
 */
get_header();
?>
<main class="site__main">
    <section class="recherche__section">
        <?php
        global $wp_query;
        $total_results = $wp_query->found_posts;
        ?>
        
        <h2>
            <?php if ($total_results > 0): ?>
                <?php echo $total_results; ?> résultat<?php echo ($total_results > 1) ? 's' : ''; ?> trouvé<?php echo ($total_results > 1) ? 's' : ''; ?> pour "<em><?php echo get_search_query(); ?></em>"
            <?php endif; ?>
        </h2>

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article>
                    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    <p><?php echo wp_trim_words(get_the_excerpt(), 60); ?></p>
                    <hr>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p>Aucun résultat trouvé pour "<em><?php echo get_search_query(); ?></em>".</p>
        <?php endif; ?>
    </section>
</main>
<?php get_footer(); ?>