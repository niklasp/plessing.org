<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<div class="wrapper" id="index-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check and opens the primary div -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<div class="project-filters">
					<a class="filter-all" href="/" data-filter="">Alle Projekte</a>

					<div class="category-filter-text">Kategorie:</div>
					<ul>
						<?php
							$categories = get_categories( array(
							    'orderby' => 'name',
							    'parent'  => 0
							) );

							$category_list = array();
							foreach ( $categories as $category ) {
								$category_list[] = '<li class="category-filter"><a data-filter="category-' . esc_html( $category->slug ) .'" href="' . get_category_link( $category->term_id ) . '">' . esc_html( $category->name ) . '</a></li> ';
							}

							echo implode( $category_list );
						?>
					</ul>
					<div class="location-filter-text">Stadt:</div>
					<ul>
						<?php
							$categories = get_categories( array(
									'orderby' => 'name',
									'parent'  => 0,
									'taxonomy' => 'stadt',
							) );

							$category_list = array();
							foreach ( $categories as $category ) {
								$category_list[] = '<li class="city-filter"><a data-filter="stadt-' . esc_html( $category->slug ) .'"href="' . get_category_link( $category->term_id ) . '">' . esc_html( $category->name ) . '</a></li> ';
							}

							echo implode( $category_list );
						?>
					</ul>
				</div>

				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>

					<div class="project-grid">

						<?php while ( have_posts() ) : the_post(); ?>

							<?php

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'loop-templates/content', 'home' );
							?>

						<?php endwhile; ?>

					</div>

				<?php else : ?>

					<?php get_template_part( 'loop-templates/content', 'none' ); ?>

				<?php endif; ?>

			</main><!-- #main -->

			<!-- The pagination component -->
			<?php understrap_pagination(); ?>

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #index-wrapper -->

<?php get_footer();
