<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Verdadera
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				
                <header class="page-header">
					<h1 class="page-title">Oops! That page can't be found.</h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p>Sorry about that. This site is still under development, so things might break occasionally.
                    If you think something went wrong, please <a href="mailto:mvhsverdadera@gmail.com">contact us!</a></p>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
