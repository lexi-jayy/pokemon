<?php

function mytheme_customize_register( $wp_customize ) {
    //All our sections, settings, and controls will be added here

    $wp_customize->add_section( 'custom_theme_colour_section' , array(
        'title'      => __( 'Colours', '18wdwu07Pokemon' ),
        'priority'   => 30,
    ) );

    $wp_customize->add_setting( 'custom_background_settings' , array(
        'default'   => '#000000',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_background_control', array(
        'label'      => __( 'Background Colour', '18wdwu07Pokemon' ),
        'section'    => 'custom_theme_colour_section',
        'settings'   => 'custom_background_settings',
    ) ) );

    $wp_customize->add_setting( 'custom_text_settings' , array(
        'default'   => '#000000',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_text_control', array(
        'label'      => __( 'text Colour', '18wdwu07Pokemon' ),
        'section'    => 'custom_theme_colour_section',
        'settings'   => 'custom_text_settings',
    ) ) );




    $wp_customize->add_section( 'layout_section' , array(
        'title'      => __( 'Layout Section', '18wdwu07Pokemon' ),
        'priority'   => 30,
    ) );

    $wp_customize->add_setting( 'sidebar_position' , array(
        'default'   => 'right',
        'transport' => 'refresh',
    ) );


    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'custom_sidebar_control', array(
        'label'      => __( 'Sidebar Position', '18wdwu07Pokemon' ),
        'section'    => 'layout_section',
        'settings'   => 'sidebar_position',
        'type' => 'radio',
        'choices' => array(
            'left' => 'Left Side',
            'right' => 'Right Side'
        )
    ) ) );




    $wp_customize->add_section( 'image_control_section' , array(
        'title'      => __( 'Upload an Image', '18wdwu07Pokemon' ),
        'priority'   => 30,
    ) );

    $wp_customize->add_setting( 'image_settings' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'logo',
            array(
                'label'      => __( 'Upload a logo', '18wdwu07Pokemon' ),
                'section'    => 'image_control_section',
                'settings'   => 'image_settings',
            )
        )
    );

}
 add_action( 'customize_register', 'mytheme_customize_register' );


 function mytheme_customize_css() {
    ?>
         <style type="text/css">
             body { 
                 background-color: <?php echo get_theme_mod('custom_background_settings', '#000000'); ?>; 
                }
                p {
                    color: <?php echo get_theme_mod('custom_text_settings', '#ffffff'); ?>;
                }
         </style>
    <?php
}
add_action( 'wp_head', 'mytheme_customize_css');