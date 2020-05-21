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

<div class="wrapper" id="front-wrapper">

		<main class="site-main" id="main">

			<div class="front-matter reveal">
				<h1>Plessing |</h1>
				<h2>Planungsbüro</h2>
			</div>
			<div class="front-links">
				<a class="reveal" href="projekte">Projekte</a>
				<a class="reveal" href="profil">Profil</a>
				<a class="reveal" href="kontakt">Kontakt</a>
			</div>

			<!-- <img class="front-image" sizes="(max-width: 767px) 100vw, (max-width: 532px) 500px, (max-height: 550px) 500px, (min-aspect-ratio: 3264/2447) calc((calc(100vh - 175px)) * 1.33388), calc(100vw - 32px)" srcset="https://images.unsplash.com/photo-1446844805183-9f5af45f89ee?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=667&amp;q=80 667w, https://images.unsplash.com/photo-1446844805183-9f5af45f89ee?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=967&amp;q=80 967w, https://images.unsplash.com/photo-1446844805183-9f5af45f89ee?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1267&amp;q=80 1267w, https://images.unsplash.com/photo-1446844805183-9f5af45f89ee?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1334&amp;q=80 1334w, https://images.unsplash.com/photo-1446844805183-9f5af45f89ee?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1567&amp;q=80 1567w, https://images.unsplash.com/photo-1446844805183-9f5af45f89ee?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1867&amp;q=80 1867w, https://images.unsplash.com/photo-1446844805183-9f5af45f89ee?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1934&amp;q=80 1934w, https://images.unsplash.com/photo-1446844805183-9f5af45f89ee?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2167&amp;q=80 2167w, https://images.unsplash.com/photo-1446844805183-9f5af45f89ee?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2467&amp;q=80 2467w, https://images.unsplash.com/photo-1446844805183-9f5af45f89ee?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2534&amp;q=80 2534w, https://images.unsplash.com/photo-1446844805183-9f5af45f89ee?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2767&amp;q=80 2767w, https://images.unsplash.com/photo-1446844805183-9f5af45f89ee?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=3067&amp;q=80 3067w, https://images.unsplash.com/photo-1446844805183-9f5af45f89ee?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=3134&amp;q=80 3134w, https://images.unsplash.com/photo-1446844805183-9f5af45f89ee?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=3264&amp;q=80 3264w, https://images.unsplash.com/photo-1446844805183-9f5af45f89ee?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=3264&amp;q=80 3264w, https://images.unsplash.com/photo-1446844805183-9f5af45f89ee?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=3264&amp;q=80 3264w, https://images.unsplash.com/photo-1446844805183-9f5af45f89ee?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=3264&amp;q=80 3264w, https://images.unsplash.com/photo-1446844805183-9f5af45f89ee?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=3264&amp;q=80 3264w, https://images.unsplash.com/photo-1446844805183-9f5af45f89ee?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=3264&amp;q=80 3264w, https://images.unsplash.com/photo-1446844805183-9f5af45f89ee?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=3264&amp;q=80 3264w" src="https://images.unsplash.com/photo-1446844805183-9f5af45f89ee?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1000&amp;q=80" alt="green trees during daytime"> -->

			<img class="front-image" sizes="(max-width: 767px) 100vw, (max-width: 532px) 500px, (max-height: 509px) 500px, (min-aspect-ratio: 3534/2356) calc((calc(100vh - 175px)) * 1.5), calc(100vw - 32px)" srcset="https://images.unsplash.com/photo-1508873881324-c92a3fc536ba?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=750&amp;q=80 750w, https://images.unsplash.com/photo-1508873881324-c92a3fc536ba?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1050&amp;q=80 1050w, https://images.unsplash.com/photo-1508873881324-c92a3fc536ba?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1350&amp;q=80 1350w, https://images.unsplash.com/photo-1508873881324-c92a3fc536ba?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1500&amp;q=80 1500w, https://images.unsplash.com/photo-1508873881324-c92a3fc536ba?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1650&amp;q=80 1650w, https://images.unsplash.com/photo-1508873881324-c92a3fc536ba?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80 1950w, https://images.unsplash.com/photo-1508873881324-c92a3fc536ba?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2100&amp;q=80 2100w, https://images.unsplash.com/photo-1508873881324-c92a3fc536ba?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2250&amp;q=80 2250w, https://images.unsplash.com/photo-1508873881324-c92a3fc536ba?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2550&amp;q=80 2550w, https://images.unsplash.com/photo-1508873881324-c92a3fc536ba?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2700&amp;q=80 2700w, https://images.unsplash.com/photo-1508873881324-c92a3fc536ba?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2850&amp;q=80 2850w, https://images.unsplash.com/photo-1508873881324-c92a3fc536ba?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=3150&amp;q=80 3150w, https://images.unsplash.com/photo-1508873881324-c92a3fc536ba?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=3300&amp;q=80 3300w, https://images.unsplash.com/photo-1508873881324-c92a3fc536ba?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=3450&amp;q=80 3450w, https://images.unsplash.com/photo-1508873881324-c92a3fc536ba?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=3534&amp;q=80 3534w, https://images.unsplash.com/photo-1508873881324-c92a3fc536ba?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=3534&amp;q=80 3534w, https://images.unsplash.com/photo-1508873881324-c92a3fc536ba?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=3534&amp;q=80 3534w, https://images.unsplash.com/photo-1508873881324-c92a3fc536ba?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=3534&amp;q=80 3534w, https://images.unsplash.com/photo-1508873881324-c92a3fc536ba?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=3534&amp;q=80 3534w, https://images.unsplash.com/photo-1508873881324-c92a3fc536ba?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=3534&amp;q=80 3534w, https://images.unsplash.com/photo-1508873881324-c92a3fc536ba?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=3534&amp;q=80 3534w, https://images.unsplash.com/photo-1508873881324-c92a3fc536ba?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=3534&amp;q=80 3534w" src="https://images.unsplash.com/photo-1508873881324-c92a3fc536ba?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1000&amp;q=80" alt="yellow leafed tree during daytime">

			<div class="front-image-overlay"></div>

		</main><!-- #main -->

</div><!-- #index-wrapper -->

<?php get_footer();
