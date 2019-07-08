<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<header class="page-header">
	<div class="jumbotron">
		<div class="container">
		  <h1 class="display-4">
		  	<?php echo single_term_title( '', false ); ?>
		  </h1>
		  <?php echo get_the_archive_description(); ?>
		</div>
	</div>
</header><!-- .page-header -->

<div class="wrapper" id="archive-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>


			<main class="site-main" id="main">

				<?php if ( have_posts() ) : ?>


					<!-- google text link ads -->
					<script type="text/javascript"><!--
					google_ad_client = "pub-6167306740911701";
					/* 468x15, created 8/4/09 */
					google_ad_slot = "5383612724";
					google_ad_width = 468;
					google_ad_height = 15;
					//-->
					</script>


					<?php /* Start the Loop */ ?>
					<table class="table">
						<tbody>
						<?php while ( have_posts() ) : the_post(); ?>

							<?php

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'loop-templates/content', get_post_type() );
							?>

						<?php endwhile; ?>
						</tbody>
					</table>
				<?php else : ?>

					<?php get_template_part( 'loop-templates/content', 'none' ); ?>

				<?php endif; ?>

			</main><!-- #main -->

			<!-- The pagination component -->
			<?php // understrap_pagination(); ?>

			<!-- Do the right sidebar check -->
			<?php  get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div> <!-- .row -->

	</div><!-- #content -->

	</div><!-- #archive-wrapper -->

<?php get_footer(); ?>
