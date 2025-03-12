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

  $wp_customize->add_setting('hero_background', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background', array(
      'label' => __('Image en arriere plan', 'theme_tp'),
      'section' => 'hero_section',
  )));

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
}

add_action('customize_register', 'theme_tp_customize_register');

?>