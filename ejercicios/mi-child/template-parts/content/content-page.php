<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( ! is_front_page() ) : ?>
		<header class="entry-header alignwide">
			<?php get_template_part( 'template-parts/header/entry-header' ); ?>

			<?php
			$subtitulo = get_field( 'subtitulo' ); //queremos que nuestro subtítulo aparezca inmediatamente después del título, pero todavía dentro de ese <header>

			if ( $subtitulo ) {
   			echo '<p>' . esc_html( $subtitulo ) . '</p>';
	}
?>
			<?php twenty_twenty_one_post_thumbnail(); ?>
		</header><!-- .entry-header -->
	<?php elseif ( has_post_thumbnail() ) : ?>
		<header class="entry-header alignwide">
			<?php twenty_twenty_one_post_thumbnail(); ?>
		</header><!-- .entry-header -->
	<?php endif; ?>

	<?php
if ( get_field( 'mostrar_aviso' ) ) { /*preguntamos si está activado el campo mostrar aviso.
como lo dejamos activado ya, la respuesta será verdadero y PHP entrará dentro del if. 
Si posteriormente desactivamos Mostrar aviso, la condición será falsa y PHP no mostrará nada.*/
    echo '<p class="aviso-acf">¡Aviso importante! Consulta nuestras novedades.</p>'; /*hemos hecho una clase aviso-acf. el aviso seguirá funcionando
	igual, pero ahora vamos a decirle desde css donde queremos colocarlo */
}
?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
				'after'    => '</nav>',
				/* translators: %: Page number. */
				'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer default-max-width">
			<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Post title. Only visible to screen readers. */
					esc_html__( 'Edit %s', 'twentytwentyone' ),
					'<span class="screen-reader-text">' . get_the_title() . '</span>'
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
