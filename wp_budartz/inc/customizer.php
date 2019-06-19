
<?php

  function wpb_customizer_register($wp_customize){
    // Showcase Section
    $wp_customize->add_section('hi', array(
      'title'   => 'Intro',
      'priority'    => 130
    ));
    $wp_customize->add_setting('hi_image', array(
      'default'   => get_bloginfo('template_directory').'/img/lisbon.jpg',
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hi_image', array(
      'label'   => 'Hi Image', 
      'section' => 'hi',
      'settings' => 'hi_image',
      'priority'  => 1
    )));

     $wp_customize->add_section('album', array(
      'title'   => 'Gallery',
      'priority'    => 130
    ));

    $wp_customize->add_setting('gallery_image', array(
      'default'   => get_bloginfo('template_directory').'/img/lisbon.jpg',
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'gallery_image', array(
      'label'   => 'Gallery Image', 
      'section' => 'album',
      'settings' => 'gallery_image',
      'priority'  => 2
    )));

    $wp_customize->add_section('footer', array(
      'title'   => 'Footer',
      'priority'    => 130
    ));

    $wp_customize->add_setting('footer_image', array(
      'default'   => get_bloginfo('template_directory').'/img/lisbon.jpg',
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_image', array(
      'label'   => 'Footer Image', 
      'section' => 'footer',
      'settings' => 'footer_image',
      'priority'  => 3
    )));


     $wp_customize->add_setting('intro_heading', array(
      'default'   => 'Hello, Im Daniel',
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('intro_heading', array(
      'label'   => 'Hi heading', 
      'section' => 'hi',
      'priority'  => 4
    ));


     $wp_customize->add_setting('intro_text', array(
      'default'   => 'Junior Web Developer',
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('intro_text', array(
      'label'   => 'Hi text', 
      'section' => 'hi',
      'priority'  => 5
    ));

     $wp_customize->add_setting('intro_icons', array(
      'default'   => '',
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('intro_icons', array(
      'label'   => 'Hi icons', 
      'section' => 'hi',
      'priority'  => 6
    ));


}

add_action( 'customize_register', 'wpb_customizer_register' );
   