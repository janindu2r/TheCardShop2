<?php add_theme_support('post-thumbnails'); ?>

<?php single_cat_title( $prefix = '', $display = true ) ?>


<?php
function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );
?>