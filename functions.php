<?php
add_action( 'wp_enqueue_scripts', 'load_ion_icons' );
function load_ion_icons() {
	wp_enqueue_style( 'ionicons', '//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css', array(), CHILD_THEME_VERSION );

}
?>