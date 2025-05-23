<?php $rest_api_wave_color = get_theme_mod('rest_api_wave_color', 'ffffff'); ?>
<?php $footer_wave_color = get_theme_mod('footer_wave_color', 'ffffff'); ?>

<?php

/**
 * Génére une liste de sous-catégories
 * @param string $parent_slug Le slug de la catégorie parente
 */

function categories_liste($parent_slug){
    echo "categorie_liste";
    // Récupérer la catégorie parente à partir de son slug
    $parent_category = get_category_by_slug($parent_slug);
    // Vérifier si la catégorie parente existe
    if ($parent_category) {
        $parent_id = $parent_category->term_id;
        // Récupérer les sous-catégories de "destination"
        $sous_categories = get_categories(array(
            'parent' => $parent_id, // Filtrer par le parent "destination"
            'hide_empty' => true, // Ne pas afficher les catégories vides
    ));

        // Vérifier s'il y a des sous-catégories
        if (!empty($sous_categories)) {
            echo '<ul class="categorie__ul">';
        foreach ($sous_categories as $categorie) {
            // Afficher le nom de chaque sous-catégorie
            echo '<li  data-category_id="' . esc_html($categorie->term_id) . '" class="categorie__ul__li">' . esc_html($categorie->name) . '</li>';
        }
        echo '</ul>';
        }
    }
}

function genere_vague($footer_wave_color){?>
    <svg class="waveFooter" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 300">
    <path fill="<?php echo $footer_wave_color ?>" fill-opacity="1">
        <animate attributeName="d" dur="6s" repeatCount="indefinite"
        values="
            M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;

            M0,128L48,117.3C96,107,192,85,288,117.3C384,149,480,235,576,261.3C672,288,768,256,864,245.3C960,235,1056,245,1152,245.3C1248,245,1344,235,1392,229.3L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;

            M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z" 
            />
    </path>
    </svg>
<?php }

/**Fonction pour générer les icones de réseaux sociaux **/

function genere_icone($reseau, $lien_reseau, $couleur)
{ ?>
    <a href="<?= $lien_reseau; ?>"><img class="iconeImg" src="https://s2.svgbox.net/social.svg?ic=<?= $reseau ?>&color=<?= $couleur ?>" width="20" height="20"></a>
<?php  }



