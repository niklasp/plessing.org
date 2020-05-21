<?php
/**
 * Single post partial template
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">
		<div class="entry-text">
			<?php echo get_the_term_list( $post->ID, 'stadt', '<div class="entry-stadt">', '', '', '</div>' ) ?>
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div>

		<div class="image-wrap">
			<?php echo get_the_post_thumbnail( $post->ID, 'large', array( 'class' => 'rellax', 'data-rellax-speed' => '-7' ) ); ?>
		</div>

	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php the_content(); ?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
