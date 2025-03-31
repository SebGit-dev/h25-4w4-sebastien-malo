<?php get_header(); ?>
    <!-- <h1>-------- 404.PHP ----------</h1> -->
    <div class="error">
        <div class="error__main">
            <h3>Tellement désolé</h3>
            <h4>La page que vous recherchez est introuvable</h4>
            <h6>Raisons possibles</h6>
            <ul>
                <li>L'adresse a peut-être été mal saisie</li>
                <li>Il se peut que le lien soit rompu ou obsolète</li>
            </ul>
            <?php get_template_part( 'gabarits/icones' ); ?>
        </div>
        <div class="error__image">
            <img src="images/404.png" alt="404">
        </div>
    </div>
<?php get_footer(); ?>