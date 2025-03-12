<?php
function theme_tp_customize_register($wp_customize){
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
}

add_action('customize_register', 'theme_tp_customize_register');

?>