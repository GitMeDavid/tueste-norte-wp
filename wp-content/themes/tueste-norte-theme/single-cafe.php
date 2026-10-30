<?php get_header(); ?>

<main class="site-main">

    <?php if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : the_post(); ?>

            <article>
                <h1><?php the_title(); ?></h1>
                <?php the_post_thumbnail(); ?>

                <?php the_content(); ?>
                <p>
    <strong>Origen:</strong>
    <?php the_field( 'origen' ); ?>
</p>
<p>
    <strong>Notas de cata:</strong>
    <?php the_field( 'notas_cata' ); ?>
</p>
<p>
    <strong>Nivel de tueste:</strong>
    <?php the_field( 'nivel_tueste' ); ?>
</p>
<p>
    <strong>Precio:</strong>
    <?php the_field( 'precio' ); ?> €
</p>

            </article>

        <?php endwhile; ?>

    <?php endif; ?>

</main>

<?php get_footer(); ?>