<?php
/**
 * Blackcats Seguridad
 */
$proversion = true;
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}



function blackcats_footer_admin() { 
    echo '&copy; 2017 - ' ;
    echo date('Y');
    echo ' Copyright <a target="_blank" rel="nofollow" href="https://motionartstudio.com.co/">Motion Art Studio</a>. Todos los derechos reservados - <a target="_blank" rel="nofollow" href="https://blackcats.com.co/">Thema BlackCats </a> Version ', _S_VERSION;  
}  

add_filter('admin_footer_text', 'blackcats_footer_admin');

function blackcat_dashboard_widget() { ?>
    <iframe id="inlineFrameExample"
        title="Inline Frame Example"
        width="300"
        height="200"
        src="https://cdn.blackcats.com.co/conect-blackcat.php">
    </iframe>
<?php } 
add_action( 'wp_dashboard_setup', 'blackcat_dashboard_setup_function' );

function blackcat_dashboard_setup_function() {
add_meta_box( 'blackcat_dashboard_widget', 'Bienvenido al Tema BlackCats', 'blackcat_dashboard_widget', 'dashboard', 'normal', 'high' );
}


function blackcats_styles () {
    wp_enqueue_style('mayagrip', get_stylesheet_directory_uri(). '/inc/librerias/mayagrip-min/mayagrip-min.css' );
    wp_enqueue_style('style', get_stylesheet_uri() );   
    wp_enqueue_script('jquery');  
}

add_action('wp_enqueue_scripts', 'blackcats_styles');


function blackcats_css_admin() {
    wp_enqueue_style( 'blackcats-maya-admin', get_template_directory_uri() . '/assets/css/blackcats-maya.css');
    wp_enqueue_style( 'mayagrip', get_template_directory_uri() . '/inc/librerias/mayagrip-min/mayagrip-min.css');
}
add_action( 'admin_enqueue_scripts', 'blackcats_css_admin' );


function jc_change_icon_admin_bar() {
	$url_img = get_template_directory_uri() ."/assets/images/blackcat-menu.png";
	echo '<style type="text/css">
	
			#wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
				background-image: url('. $url_img  .') !important;
				background-size: cover;
				background-position: 0 0;
				color:rgba(0, 0, 0, 0);
			}
			
			#wpadminbar #wp-admin-bar-wp-logo.hover > .ab-item .ab-icon {
				background-position: 0 0;
			}
	</style>';
}
add_action('wp_before_admin_bar_render', 'jc_change_icon_admin_bar');

add_action( 'admin_bar_menu', 'anadir_productos_barra', 500 );
function anadir_productos_barra( $wp_admin_bar ) {
    $args = array(
        'id'    => 'enlace-productos',
        'title' => __( 'Blackcat' ),
        'href'  => 'blackcats.com.co',
    );
    $wp_admin_bar->add_node($args);
}
add_action( 'admin_bar_menu', 'anadir_submenu_barra', 500 );
function anadir_submenu_barra( $wp_admin_bar ) {
    $wp_admin_bar->add_menu( array(
        'parent' => 'enlace-productos',
        'id'     => 'id_apariencia',
        'title'  => __('Apariencia2'),
        'href'   => 'blackcats.com.co/documentacion',
    ) );
}
