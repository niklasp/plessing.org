<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class('home-post'); ?> id="post-<?php the_ID(); ?>">

	<?php
		echo sprintf( '<a href="%s">%s</a>', esc_url( get_permalink() ), get_the_post_thumbnail( $post->ID ) );
	?>

	<header class="entry-header">

		<?php echo get_the_term_list( $post->ID, 'stadt', '<div class="entry-stadt">', ', ', '</div>' ) ?>

		<?php
		the_title(
			sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
			'</a></h2>'
		);
		?>

	</header><!-- .entry-header -->

	<div class="entry-content">

		<!-- <?php the_excerpt(); ?> -->

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

		<?php if (has_category() ): ?>
			<ul class="post-categories">
				<?php foreach (get_the_category() as $category ) { ?>
					<li class="post-category"><a href="<?php echo get_category_link( $category->cat_ID ) ?>"><?php echo $category->name ?></a></li>
				<?php } ?>
			</ul>
		<?php endif ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
