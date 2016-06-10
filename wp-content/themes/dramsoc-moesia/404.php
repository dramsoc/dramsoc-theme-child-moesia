<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Moesia
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found" style="">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Error 404 - Resource not found', 'moesia' ); ?></h1>
				</header><!-- .page-header -->
				<div class="page-content" style="width: 80%; margin: 0 auto; margin-bottom:100px; ">
					<h2>Sorry, but that URL could not be found on www.dramsoc.org</h2>
					<div style="text-align;left">
					<h4>If it used to be here then it may be on one of our archived sites.<h4>
					
					<p>From 2011-2015, then take a look at <a href="http://www.dramsoc.org/old">dramsoc.org/old</a>;<p>

					<p>For materials prior to 2011, see <a href="http://www.dramsoc.org/older/">dramsoc.org/older</a></p>
					<p style="font-weight: bold"><br>Please note that these sites
					are unmaintained and kept only for archival purposes.</p><div>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
