<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club de voyage</title>
    <!-- link rel="stylesheet" href="normalize.css" -->
    <!-- link rel="stylesheet" href="style.css" -->
    <?php wp_head() ?>
</head>
<body>
    <header>
        <div class="entete">
            <figure class="entete__logo">
                <?php 
                    if(function_exists('the_custom_logo')) {
                        the_custom_logo();
                    }
                ?>
            </figure>

            <label for="checkbox__burger" class="burger">
                <img src="https://s2.svgbox.net/hero-outline.svg?ic=menu" alt="bouton burger" width="32" height="32">
            </label>
            <input type="checkbox" id="checkbox__burger" class="checkbox__burger"> </input>

            <div class="entete__navigation">
                <?php wp_nav_menu(array(
                    'menu' => 'principal',
                    'container' => 'nav',
                    'container_class' => 'entete__menu'
                )); ?>
                <?php 
                    get_search_form() 
                ?>
            </div> <!-- fin entete__navigation  -->
        </div>
    </header>