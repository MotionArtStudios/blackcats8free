<?php
/**
 * Blackcats Seguridad
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'BACKCATS_PRO_UPGRADE_URL', 'https://blackcats.com.co/pro/' );
define( 'BACKCATS_THEME_DIR', trailingslashit( get_template_directory() ) );
require_once BACKCATS_THEME_DIR . '/core/login.php';
require_once BACKCATS_THEME_DIR . '/core/blackcats-options.php';

$proversion = BACKCATS_THEME_DIR. '/core/pro/blackcatspro.php';
if (file_exists($proversion)) {
    if ( ! defined( '_S_VERSION' ) ) {
        // Replace the version number of the theme on each release.
        define( '_S_VERSION', '8.0.0 pro' );
        require_once BACKCATS_THEME_DIR . '/core/pro/blackcatspro.php';
    }
    
} else {
    if ( ! defined( '_S_VERSION' ) ) {
        // Replace the version number of the theme on each release.
        define( '_S_VERSION', '8.0.0' );
    }
}


if ( is_admin() ){
    require_once BACKCATS_THEME_DIR . '/core/blackcats.php';
    require_once BACKCATS_THEME_DIR . '/core/soportes/compatibilidad.php';
}

if ( ! function_exists( 'blackcats_thema' ) ){
    function blackcats_setup(){

    }
}

function blackcats_theme_version() {
    wp_enqueue_script( 'my-theme-version', get_template_directory_uri() . '/assets/js/update.js', array( 'jquery' ), '8.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'blackcats_theme_version' );

