<?php
/**
 * Blackcats Seguridad
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!doctype html>
<html <?php language_attributes();?> >
    <head>
        <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' |'; } ?><?php bloginfo('name'); ?></title>
        <meta charset="<?php bloginfo ('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <!-- agregando soporte para Web APP  IOS -->
        <meta name="apple-mobile-web-app-title" content="<?php echo the_title(); ?>">
        <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri()?>/inc/img/blackcat-icon.png">
         <!-- agregando soporte para Web APP Android -->
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="theme-color" content="#000">
        <meta name="application-name" content="<?php echo the_title(); ?>">
        <link rel="icon" href="<?php echo get_stylesheet_directory_uri()?>/inc/img/blackcat-icon.png">
        <?php wp_head(); ?>
    </head>
<body>  
<main>
