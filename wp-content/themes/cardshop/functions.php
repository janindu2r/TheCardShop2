<?php add_theme_support('post-thumbnails'); ?>

<?php single_cat_title( $prefix = '', $display = true ) ?>


<?php
//Register Navigations
add_action( 'init', 'my_custom_menus' );
function my_custom_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __( 'Primary Menu' ),
            'secondary-menu' => __( 'Secondary Menu' )
        )
    );
}

?>