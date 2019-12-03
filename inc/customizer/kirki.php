<?php

Kirki::add_panel( 'panel_id', array(
    'priority'    => 1,
    'title'       => __( 'EMCOS.VN', 'kirki' ),
    'description' => __( 'Cài đặt chung cho site', 'kirki' ),
) );

//Garenal Logo
function remove_customizer_settings( $wp_customize ){
    $wp_customize->remove_section( 'colors' );
    $wp_customize->remove_section( 'background_image' );
    $wp_customize->remove_section( 'header_image' );
    $wp_customize->remove_section( 'static_front_page' );
    /*$wp_customize->remove_control( 'blogdescription' );
    $wp_customize->remove_control( 'blogname' );*/
    $wp_customize->remove_control( 'display_header_text' );
    // Rename existing section

    $wp_customize->add_section('title_tagline', array(
        'title'    => esc_html__( 'Logo', 'kirki' ),
        'priority' => 1,
        'panel'    => 'panel_id',
    ) );

    /* Custom CSS */
    $wp_customize->add_section( 'custom_css', array(
        'title'              => __( 'Custom CSS' ),
        'priority'           => 200,
        'panel'    => 'panel_id',
        'description_hidden' => true,
        'description'        => sprintf( '%s<br /><a href="%s" class="external-link" target="_blank">%s<span class="screen-reader-text">%s</span></a>',
            __( 'CSS allows you to customize the appearance and layout of your site with code. Separate CSS is saved for each of your themes. In the editing area the Tab key enters a tab character. To move below this area by pressing Tab, press the Esc key followed by the Tab key.' ),
            esc_url( __( 'https://codex.wordpress.org/CSS' ) ),
            __( 'Learn more about CSS' ),
            /* translators: accessibility text */
            __( '(opens in a new window)' )
        ),
    ) );
}

add_action( 'customize_register', 'remove_customizer_settings', 20 );

Kirki::add_section( 'section_header', array(
    'title'          => esc_html__( 'Header', 'kirki' ),
    'description'    => esc_html__( 'Header', 'kirki' ),
    'panel'          => 'panel_id',
    'priority'       => 160,
) );

Kirki::add_field( 'image_banner_header1', [
    'type'        => 'image',
    'settings'    => 'image_banner_header1',
    'label'       => esc_html__( 'Banner 1', 'kirki' ),
    'section'     => 'section_header',
    'default'     => '',
    'choices'     => [
        'save_as' => 'array',
    ],
] );
Kirki::add_field( 'image_banner_header2', [
    'type'        => 'image',
    'settings'    => 'image_banner_header2',
    'label'       => esc_html__( 'Banner 2', 'kirki' ),
    'section'     => 'section_header',
    'default'     => '',
    'choices'     => [
        'save_as' => 'array',
    ],
] );
Kirki::add_field( 'image_banner_header3', [
    'type'        => 'image',
    'settings'    => 'image_banner_header3',
    'label'       => esc_html__( 'Banner 3', 'kirki' ),
    'section'     => 'section_header',
    'default'     => '',
    'choices'     => [
        'save_as' => 'array',
    ],
] );
Kirki::add_field( 'hoteline_header', [
    'type'     => 'text',
    'settings' => 'hoteline_header',
    'label'    => esc_html__( 'Hotline', 'kirki' ),
    'section'  => 'section_header',
    'priority' => 10,
] );


// Repeater Setting
Kirki::add_field( 'pestex_section_one_services_control', array(
    'type'        => 'repeater',
    'label'       => esc_attr__( 'Services', 'pestex' ),
    'section'     => 'section_header',
    'priority'    => 10,
    'choices' => array(
        'limit' => 4
    ),
    'row_label' => array(
        'type'  => 'field',
        'value' => esc_attr__('service', 'pestex' ),
        'field' => 'link_text',
    ),
    'settings'    => 'pestex_section_one_services',
    // Defining Pre-Made Repeater Fields
    'default'     => array(
        array(
            //Default Image/Fields
            'service_image' =>  get_template_directory_uri() . '/assets/img/resicon.svg',
            'service_link' => esc_attr__( 'Residential', 'pestex' ),
        ),
    ),
    'fields' => array(
        'service_image' => array(
            'type'        => 'image',
            'label'       => esc_attr__( 'Image', 'pestex' ),
            'default'     =>  '',
        ),
        'service_link' => array(
            'type'        => 'text',
            'label'       => esc_attr__( 'Url', 'pestex' ),
            'default'     => '',
        ),
    )
) );