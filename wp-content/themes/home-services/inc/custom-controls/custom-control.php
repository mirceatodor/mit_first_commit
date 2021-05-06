<?php
if( ! function_exists( 'home_services_register_custom_controls' ) ) :
/**
 * Register Custom Controls
*/
function home_services_register_custom_controls( $wp_customize ) {
    
    // Load our custom control.
    get_template_part('/inc/custom-controls/slider/class-slider','control');
    //require_once get_template_directory() . '/inc/custom-controls/slider/class-slider-control.php';

    get_template_part('/inc/custom-controls/radiobtn/class-radio-buttonset','control');
    //require_once get_template_directory() . '/inc/custom-controls/radiobtn/class-radio-buttonset-control.php';

    get_template_part('/inc/custom-controls/radioimg/class-radio-image','control');
    //require_once get_template_directory() . '/inc/custom-controls/radioimg/class-radio-image-control.php';

    get_template_part('/inc/custom-controls/toggle/class-toggle','control');
    // require_once get_template_directory() . '/inc/custom-controls/toggle/class-toggle-control.php';

    get_template_part('/inc/custom-controls/notes','');
    //require_once get_template_directory() . '/inc/custom-controls/notes.php';
            
    // Register the control type.
    $wp_customize->register_control_type( 'Home_Services_Slider_Control' );
    $wp_customize->register_control_type( 'Home_Services_Buttonset_Control' );
    $wp_customize->register_control_type( 'Home_Services_Radio_Image_Control' );
    $wp_customize->register_control_type( 'Home_Services_Toggle_Control' );
}
endif;
add_action( 'customize_register', 'home_services_register_custom_controls' );