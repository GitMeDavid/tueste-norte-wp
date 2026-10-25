<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

/* Principio del bucle */
while ( have_posts() ) :
	the_post();
	
	get_template_part( 'template-parts/content/content-page' ); /*Le decimos a WordPress que cargue la parte de la plantilla que 
	se encarga de mostrar el contenido de una página*/

	// Si los comentarios están habilitados o hay al menos un comentario, carga la plantilla de comentarios..
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
endwhile; // Fin del bucle.

get_footer();
