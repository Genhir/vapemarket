<?php

add_action( 'customize_register', 'vm_customizer_settings' );

function vm_customizer_settings( $wp_customize ) {

	// social
	$wp_customize->add_section( 'vm_social', array(
		'title' => __( 'Social' ),
		'description' => __( 'Social links and integration.' ),
		'priority' => 10,
		'capability' => 'edit_theme_options',
	));

	// facebook
	$wp_customize->add_setting( 'vm_social_fb' , array(
    'transport'   => 'refresh',
	));

	$wp_customize->add_control( 'vm_social_fb', array(
		'label'   => 'Facebook URL',
		'section' => 'vm_social',
		'type'    => 'text',
	));

	// footer
	$wp_customize->add_section( 'vm_footer', array(
		'title' => __( 'Footer' ),
		'description' => __( 'Footer settings' ),
		'priority' => 10,
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_setting( 'footer_menu1_header' , array(
    'transport'   => 'refresh',
	));

	$wp_customize->add_setting( 'footer_menu2_header' , array(
    'transport'   => 'refresh',
	));

	$wp_customize->add_setting( 'footer_menu3_header' , array(
    'transport'   => 'refresh',
	));

	$wp_customize->add_control( 'footer_menu1_header', array(
		'label'   => 'Menu 1 Header',
		'section' => 'vm_footer',
		'type'    => 'text',
	));

	$wp_customize->add_control( 'footer_menu2_header', array(
		'label'   => 'Menu 2 Header',
		'section' => 'vm_footer',
		'type'    => 'text',
	));

	$wp_customize->add_control( 'footer_menu3_header', array(
		'label'   => 'Menu 3 Header',
		'section' => 'vm_footer',
		'type'    => 'text',
	));

	// branding
	$wp_customize->add_section( 'vm_branding', array(
		'title' => __( 'Branding' ),
		'description' => __( 'Branding elements' ),
		'priority' => 10,
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_setting( 'logo' , array(
    'transport'   => 'refresh',
	));

	$wp_customize->add_control(
     new WP_Customize_Image_Control(
       $wp_customize,
       'logo',
       array(
         'label'      => __( 'Upload a logo', 'vm_theme' ),
         'section'    => 'vm_branding',
         'settings'   => 'logo',
       )
     )
   );

	 // footer logo
	 $wp_customize->add_setting( 'footer_logo' , array(
     'transport'   => 'refresh',
 	));

 	$wp_customize->add_control(
      new WP_Customize_Image_Control(
        $wp_customize,
        'footer_logo',
        array(
          'label'      => __( 'Upload a logo', 'vm_theme' ),
          'section'    => 'vm_branding',
          'settings'   => 'footer_logo',
        )
      )
    );

	// colors

	$wp_customize->add_section( 'vm_colors', array(
  'title' => __( 'Colors' ),
  'description' => __( 'Customize theme colors here.' ),
  'priority' => 160,
  'capability' => 'edit_theme_options',
) );

	$wp_customize->add_setting( 'background_color' , array(
    'default'     => '#43C6E4',
    'transport'   => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'background_color', array(
	'label'      => 'Background Color',
	'section'    => 'vm_colors',
	'settings'   => 'background_color',
) ) );

	// header background
	$wp_customize->add_setting( 'header_bg_color' , array(
		'default'     => '#000000',
		'transport'   => 'refresh',
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_bg_color', array(
		'label'      => 'Header Background Color',
		'section'    => 'vm_colors',
		'settings'   => 'header_bg_color',
	)));

	// footer background
	$wp_customize->add_setting( 'footer_bg_color' , array(
		'default'     => '#CCCCCC',
		'transport'   => 'refresh',
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_bg_color', array(
		'label'      => 'Footer Background Color',
		'section'    => 'vm_colors',
		'settings'   => 'footer_bg_color',
	)));

}
