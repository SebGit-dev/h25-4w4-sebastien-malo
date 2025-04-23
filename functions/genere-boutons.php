<?php

/**
 * Génére une liste de sous-catégories
 * @param string $parent_slug Le slug de la catégorie parente
 */

function categories_liste($parent_slug)
{
    $parent_category = get_category_by_slug($parent_slug);

    if ($parent_category) {
        $parent_id = $parent_category->term_id;
        $sous_categories = get_categories(array(
            'parent' => $parent_id, 
            'hide_empty' => true, 
        ));
        if (!empty($sous_categories)) {
            echo '<ul class="categorie__ul">';
            foreach ($sous_categories as $categorie) {

                echo '<li data-categoryID="' . esc_html($categorie->term_id) . '" class="categorie__ul__li">' . esc_html($categorie->name) . '</li>';
            }
            echo '</ul>';
        } else {
            echo 'Aucune sous-catégorie trouvée pour "destination".';
        }
    } else {
        echo 'La catégorie "' . esc_html($parent_slug) . '" n\'existe pas.';
    }
}

function genere_vague(){?>
    <svg class="waveFooter" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200">
    <path fill="#fad8d0" fill-opacity="1">
        <animate attributeName="d" dur="6s" repeatCount="indefinite"
        values="
            M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;

            M0,128L48,117.3C96,107,192,85,288,117.3C384,149,480,235,576,261.3C672,288,768,256,864,245.3C960,235,1056,245,1152,245.3C1248,245,1344,235,1392,229.3L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;

            M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z" />
    </path>
    </svg>
<?php }