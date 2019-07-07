<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<footer class="site-footer">

		<div class="<?php echo esc_attr( $container ); ?>">

			<div class="row">

				<div class="col-sm-5">

						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/TC_BrandAssets_Logo_White.svg" width="100%" height="50px" alt="" />
						<div class="site-info" id="colophon">
							<a href="/">www.triviacafe.com</a> &copy; 2005-<?php echo date('Y'); ?>. All rights reserved.
						</div><!-- .site-info -->
				</div>

				<div class="col-sm-3">

							<?php // understrap_site_info(); ?>

							<?php wp_nav_menu(
								array(
									'theme_location'  => 'secondary',
									'container_class' => '',
									'container_id'    => 'footer-menu',
									'menu_class'      => 'nav flex-column',
									'fallback_cb'     => '',
									'menu_id'         => 'footer-menu',
									'depth'           => 1,
									'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
								)
							); ?>

				</div>

				<div class="col-sm-4">
					<h3>Contact Us</h3>
					<p>
						Howard Rachelson<br/>
						<a href="mailto:howard1@triviacafe.com">
							howard1@triviacafe.com
						</a>
					</p>

					<ul class="nav social nav-fill">
					  <li class="nav-item">
					    <a class="nav-link" href="https://facebook.com/">
					    	<i class="fa fab fa-facebook-f"></i>
					    </a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="https://twitter.com/">
					    	<i class="fa fab fa-twitter"></i>
					    </a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="https://instagram.com/">
					    	<i class="fa fab fa-instagram"></i>
					    </a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="mailto:howard1@triviacafe.com">
					    	<i class="fa fas fa-envelope"></i>
					    </a>
					  </li>
					</ul>

				</div><!--col end -->

			</div><!-- row end -->

		</div><!-- container end -->

	</footer><!-- #colophon -->


</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

