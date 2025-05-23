<?php
function theme_tp_customize_register($wp_customize){

    // ----------------------- Section Hero --------------------------

  $wp_customize->add_section('hero_section', array(
    'title' => __('Hero Section', 'theme_tp'),
    'priority' => 30,
  ));

  $wp_customize->add_setting('hero_auteur', array(
    'default' => __('Sebastien Malo', 'theme_tp'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('hero_auteur', array(
    'label' => __('Auteur', 'theme_tp'),
    'section' => 'hero_section',
    'type' => 'text',
  ));

  for ($k = 0; $k<3 ; $k++) {
  $wp_customize->add_setting('hero_background_' . $k, array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background_' . $k, array(
    'label' => __('Image en arrière plan ' . ($k+1) , 'theme_tp'),
    'section' => 'hero_section',
  )));
  }

  $wp_customize->add_setting('hero_courriel', array(
    'default' => __('admin@gftnth00.mywhc.ca', 'theme_tp'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('hero_courriel', array(
    'label' => __('Courriel', 'theme_tp'),
    'section' => 'hero_section',
    'type' => 'text',
  ));

  $wp_customize->add_setting('hero_color_text', array(
    'default' => '',
    'transport' => 'refresh',
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_color_text', array(
      'label' => __('Coleur des textes', 'theme_tp'),
      'section' => 'hero_section',
      'settings' => 'hero_color_text'
  )));

  $wp_customize->add_setting('hero_nombre_images_carrousel', array(
      'sanitize_callback' => 'sanitize_text_field',
      'default' => 1,
  ));

  $wp_customize->add_control('hero_nombre_images_carrousel', array(
      'label' => __('Nombre Images Carroussel'),
      'type' => 'number',
      'section' => 'hero_section', // Add a default or your own section
  ));

  

// ----------------------- Section Footer --------------------------

  $wp_customize->add_section('footer_section', array(
    'title' => __('Footer Section', 'theme_tp'),
    'priority' => 30,
  ));

  $wp_customize->add_setting('footer_mission', array(
    'default' => __('Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim saepe facere maxime repudiandae libero laboriosam doloremque. Tenetur iure nesciunt iste ducimus in nisi cum fugiat dignissimos totam doloremque pariatur exercitationem tempora earum quia, architecto aliquam esse laboriosam maiores nulla error laudantium, dolorem fuga. Recusandae nihil mollitia ex doloribus laboriosam aliquid.', 'theme_tp'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('footer_mission', array(
    'label' => __('Mission', 'theme_tp'),
    'section' => 'footer_section',
    'type' => 'text',
  ));

  $wp_customize->add_setting('footer_adresse', array(
    'default' => __('Siège social, 7373 Boul de la Côte-Vertu, Montréal (Saint-Laurent', 'theme_tp'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('footer_adresse', array(
    'label' => __('Adresse', 'theme_tp'),
    'section' => 'footer_section',
    'type' => 'text',
  ));

  $wp_customize->add_setting('footer_telephone', array(
    'default' => __('1 (888) 247-2262', 'theme_tp'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('footer_telephone', array(
    'label' => __('Numero Telephone', 'theme_tp'),
    'section' => 'footer_section',
    'type' => 'text',
  ));

  
  $wp_customize->add_setting('footer_courriel', array(
    'default' => __('admin@gftnth00.mywhc.ca', 'theme_tp'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('footer_courriel', array(
    'label' => __('Courriel', 'theme_tp'),
    'section' => 'footer_section',
    'type' => 'text',
  ));

  $wp_customize->add_setting('footer_destination_titre', array(
    'default' => __('La meilleure destination', 'theme_tp'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('footer_destination_titre', array(
    'label' => __('Destination titre', 'theme_tp'),
    'section' => 'footer_section',
    'type' => 'text',
  ));

  $wp_customize->add_setting('footer_destination_img', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_destination_img', array(
      'label' => __('Image destination footer', 'theme_tp'),
      'section' => 'footer_section',
  )));

  // ----------------------- Section Pays --------------------------

  $wp_customize->add_section('pays_section', array(
    'title' => __('Pays Section', 'theme_tp'),
    'priority' => 30,
  ));

  $wp_customize->add_setting('rest_api_wave_color', array(
    'default' => '',
    'transport' => 'refresh',
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'rest_api_wave_color', array(
      'label' => __('Couleur de la vague du haut', 'theme_tp'),
      'section' => 'pays_section',
      'settings' => 'rest_api_wave_color'
  )));

  $wp_customize->add_setting('footer_wave_color', array(
    'default' => '',
    'transport' => 'refresh',
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_wave_color', array(
      'label' => __('Couleur de la vague du bas', 'theme_tp'),
      'section' => 'pays_section',
      'settings' => 'footer_wave_color'
  )));

// ----------------------- Section erreur --------------------------

// Erreur Section

$wp_customize->add_section('erreur_section', array(
  'title' => __('Erreur Section', 'theme_tp'),
  'priority' => 30,
));

// Erreur Titre

$wp_customize->add_setting('erreur_titre', array(
  'default' => __("Oops vous avez echoue sur l'ile 404!", 'theme_tp'),
  'sanitize_callback' => 'sanitize_text_field'
));

$wp_customize->add_control('erreur_titre', array(
  'label' => __('Titre', 'theme_tp'),
  'section' => 'erreur_section',
  'type' => 'text',
));

// Erreur Description

$wp_customize->add_setting('erreur_description', array(
  'default' => __("Pas de panique, cher membre explorateur ! Vous avez dérivé un peu trop loin des destinations de rêve que notre club a soigneusement sélectionnées pour vous. Reprenez votre périple en cliquant sur 'Accueil' pour découvrir à nouveau nos voyages d'exception !", 'theme_tp'),
  'sanitize_callback' => 'sanitize_text_field'
));

$wp_customize->add_control('erreur_description', array(
  'label' => __('Description', 'theme_tp'),
  'section' => 'erreur_section',
  'type' => 'text',
));

// Erreur Couleur Text

$wp_customize->add_setting('erreur_color_text', array(
  'default' => '',
  'transport' => 'refresh',
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'erreur_color_text', array(
    'label' => __('Coleur des textes', 'theme_tp'),
    'section' => 'erreur_section',
    'settings' => 'erreur_color_text'
)));

// Erreur Background

$wp_customize->add_setting('erreur_background', array(
  'default' => '',
  'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'erreur_background', array(
    'label' => __('Image en arriere plan', 'theme_tp'),
    'section' => 'erreur_section',
)));

// ----------------------- Section icones --------------------------

  $wp_customize->add_section('icones_section', array(
    'title' => __('Icones Section', 'theme_tp'),
    'priority' => 30,
  ));


  $wp_customize->add_setting('hero_nb_icones', array(
      'sanitize_callback' => 'sanitize_text_field',
      'default' => 1,
  ));

  $wp_customize->add_control('hero_nb_icones', array(
      'type' => 'number',
      'section' => 'icones_section', // Add a default or your own section
      'label' => __('Nombre Icones Sociaux'),
  ));

  $hero_nb_icones = get_theme_mod('hero_nb_icones', '1');

  for ($k = 0; $k < $hero_nb_icones; $k++) {
      $wp_customize->add_setting('hero_icones_' . $k, array(
          'default' => __('wordpress', 'theme_tp'),
          'sanitize_callback' => 'sanitize_text_field'
      ));

      $wp_customize->add_control('hero_icones_' . $k, array(
          'label' => __('Icones Reseaux Sociaux ' . ($k + 1), 'theme_tp'),
          'section' => 'icones_section',
          'type' => 'text',
      ));
  }

  for ($k = 0; $k < $hero_nb_icones; $k++) {
      $wp_customize->add_setting('hero_lien_reseaux_' . $k, array(
          'default' => __('https://github.com/SebGit-dev/h25-4w4-sebastien-malo/tree/tp2-seb', 'theme_tp'),
          'sanitize_callback' => 'sanitize_text_field'
      ));

      $wp_customize->add_control('hero_lien_reseaux_' . $k, array(
          'label' => __('Liens Reseaux Sociaux ' . ($k + 1), 'theme_tp'),
          'section' => 'icones_section',
          'type' => 'text',
      ));
  }

  $wp_customize->add_setting('hero_couleur_icones', array(
    'default' => 'ffffff',
    'sanitize_callback' => 'sanitize_hex_color_no_hash',
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_couleur_icones', array(
          'label' => __('Couleur Icones Sociaux'),
          'section' => 'icones_section',
      ))
  );
}

add_action('customize_register', 'theme_tp_customize_register');

?>