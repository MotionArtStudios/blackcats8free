<?php

function blackcats_login_logo() { 
?>
 <style type="text/css">
 #login h1 a, .login h1 a {
 background-image: url('https://cdn.nskstudios.com/blackcats/blackcat-wordpress.png');
 margin-bottom: 0;
 background-size: 300px;
 width: 300px;
 margin-left: auto;
 margin-right: auto;
 }
 .login form {
	 border-radius: 20px;
 }
 .wp-core-ui .button-primary {
	 background: #000 !important;
	 width: 100%;
    border-radius: 14px!important;;
	 /*border-color: #f16558 !important;*/
	 box-shadow: 0 1px 0 #e0e0e0e0 !important;
	/* text-shadow: 0 -1px 1px #f16558, 1px 0 1px #f16558, 0 1px 1px #f16558, -1px 0 1px #f16558 !important;*/
 }
 body.login {background-color: #e0e0e0e0;} .login #backtoblog a, .login #nav a {color: #000 !important}
 </style>
<?php }
add_action( 'login_enqueue_scripts', 'blackcats_login_logo' );


function blackcats_login_logo_url_title() {
    return 'Pon aquí el texto que quieras';
}
add_filter( 'login_headertitle', 'blackcats_login_logo_url_title' );


function blackcats_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'blackcats_login_logo_url' );


function blackcats_no_wordpress_errors(){
  return 'Ups! Algo has puesto mal...';
}
add_filter( 'login_errors', 'blackcats_no_wordpress_errors' );


function blackcats_eliminar_vibracion_login() {
	remove_action('login_head', 'wp_shake_js', 12);
}
add_action('login_head', 'blackcats_eliminar_vibracion_login');