<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

		<!-- Font Awesome -->
		<script src="https://kit.fontawesome.com/b717812a84.js" crossorigin="anonymous"></script>

		<!-- flickity -->
		<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

		<!-- flickity js -->
		<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

	

		<header id="site-header" class="header-footer-group" role="banner">
			
			<div class="container">
			
			<div class="header-inner section-inner">

				<div class="header-titles-wrapper">

					<div class="header-titles">

						<?php
							// Site title or logo.
							twentytwenty_site_logo();
						?>

					</div><!-- .header-titles -->

					<button class="toggle nav-toggle mobile-nav-toggle" data-toggle-target=".menu-modal"  data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
						<span class="toggle-inner">
							<span class="toggle-icon">
								<?php twentytwenty_the_theme_svg( 'ellipsis' ); ?>
							</span>
							<span class="toggle-text"><?php _e( 'Menu', 'twentytwenty' ); ?></span>
						</span>
					</button><!-- .nav-toggle -->

				</div><!-- .header-titles-wrapper -->

				<div class="header-navigation-wrapper">

					<?php
					if ( has_nav_menu( 'primary' ) || ! has_nav_menu( 'expanded' ) ) {
						?>

							<nav class="primary-menu-wrapper" aria-label="<?php esc_attr_e( 'Horizontal', 'twentytwenty' ); ?>" role="navigation">

								<ul class="primary-menu reset-list-style">

								<?php
								if ( has_nav_menu( 'primary' ) ) {

									wp_nav_menu(
										array(
											'container'  => '',
											'items_wrap' => '%3$s',
											'theme_location' => 'primary',
										)
									);

								} elseif ( ! has_nav_menu( 'expanded' ) ) {

									wp_list_pages(
										array(
											'match_menu_classes' => true,
											'show_sub_menu_icons' => true,
											'title_li' => false,
											'walker'   => new TwentyTwenty_Walker_Page(),
										)
									);

								}
								?>

								</ul>

							</nav><!-- .primary-menu-wrapper -->

						<?php
					}

					if ( true === $enable_header_search || has_nav_menu( 'expanded' ) ) {
						?>

						<div class="header-toggles hide-no-js">

						<?php
						if ( has_nav_menu( 'expanded' ) ) {
							?>

							<div class="toggle-wrapper nav-toggle-wrapper has-expanded-menu">

								<button class="toggle nav-toggle desktop-nav-toggle" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
									<span class="toggle-inner">
										<span class="toggle-text"><?php _e( 'Menu', 'twentytwenty' ); ?></span>
										<span class="toggle-icon">
											<?php twentytwenty_the_theme_svg( 'ellipsis' ); ?>
										</span>
									</span>
								</button><!-- .nav-toggle -->

							</div><!-- .nav-toggle-wrapper -->

							<?php
						}

						?>

						</div><!-- .header-toggles -->
						<?php
					}
					?>

				</div><!-- .header-navigation-wrapper -->

				<div class="redes-sociais">
					<a href="https://www.facebook.com/sunoresearch/" target="_blank"><i class="fab fa-facebook-f"></i></a>
					<a href="https://twitter.com/sunoresearchcom" target="_blank"><i class="fab fa-twitter"></i></a>
					<a href="https://www.instagram.com/sunoresearch/?hl=pt-br" target="_blank"><i class="fab fa-instagram"></i></a>
					<a href="https://www.youtube.com/channel/UCWDeEIDAIi_oYKDiqwfGyRg" target="_blank"><i class="fab fa-youtube"></i></a>
				</div>

			</div><!-- .header-inner -->

			</div>

			<?php
			// Output the search modal (if it is activated in the customizer).
			if ( true === $enable_header_search ) {
				get_template_part( 'template-parts/modal-search' );
			}
			?>

		</header><!-- #site-header -->

	
		<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' ); ?>

