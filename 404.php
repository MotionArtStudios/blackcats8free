<?php
/**
 * Blackcats Seguridad
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header(); /* Template Name: Index */ ?>
<section class="cat-row">
        <div class="colum-pc-6 colum-mv-12 blackcat-404">
        <i class="fa-solid fa-triangle-exclamation"></i>
        <span class="blackcat-bold">404 Error</span>
        <br>
            <h1 class="blackcat-h1" style="font-size: 1.5em;">
                Upss Pagina No Encontrada
            </h1>
            <br>
            <img style="width: 150px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-blackcats.png" alt="Blackcat 404">
        </div>
        <div class="colum-pc-6 colum-mv-12 blackcat-404">
             <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blackcat-404.png" alt="Blackcat 404">
        </div>
</section>

<?php get_template_part('template-parts/content'); 


 get_footer(); 