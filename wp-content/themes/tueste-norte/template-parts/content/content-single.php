<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header alignwide">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php twenty_twenty_one_post_thumbnail(); ?>
	</header><!-- .entry-header -->

	<div class="entry-content"> 
		<?php /*the_content le dice a wordpress«muestra aquí el contenido que hemos escrito en el editor» */
		the_content(); 
		$origen = get_field( 'origen' ); /* creamos la variable $origen, le pedimos a ACF el valor de un campo
		'origen' es exactamente el nombre del campo ACF que creamos*/
		if ( $origen ) {
			$origen = get_field( 'origen' );
			$notas_de_cata = get_field( 'notas_de_cata' );
			$nivel_tueste = get_field( 'nivel_tueste' );
			$precio = get_field( 'precio' );

if ( $origen || $notas_de_cata || $nivel_tueste || $precio ) {
	echo '<section class="ficha-cafe">';
    echo '<h2>Ficha de café</h2>';
}

if ( $origen ) {
    echo '<p><strong>Origen:</strong> ' . esc_html( $origen ) . '</p>';
}

if ( $notas_de_cata ) {
    echo '<p><strong>Notas de cata:</strong> ' . esc_html( $notas_de_cata ) . '</p>';
}

if ( $nivel_tueste ) {
    echo '<p><strong>Nivel de tueste:</strong> ' . esc_html( $nivel_tueste ) . '</p>';
}

if ( $precio ) {
    echo '<p><strong>Precio:</strong> ' . esc_html( $precio ) . ' €</p>';
}

if ( $origen || $notas_de_cata || $nivel_tueste || $precio ) {
    echo '</section>';
}

} /* si $origen contiene algun dato, entonces ejecuta lo que pongamos entre las llaves*/

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

	<footer class="entry-footer default-max-width">
		<?php twenty_twenty_one_entry_meta_footer(); ?>
	</footer><!-- .entry-footer -->

	<?php if ( ! is_singular( 'attachment' ) ) : ?>
		<?php get_template_part( 'template-parts/post/author-bio' ); ?>
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
