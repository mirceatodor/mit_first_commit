<?php
/**
 * Header One Style Template
 *
 * @package Deneb
 */
$deneb_phone      = deneb_gtm( 'deneb_header_phone' );
$deneb_email      = deneb_gtm( 'deneb_header_email' );
$deneb_address    = deneb_gtm( 'deneb_header_address' );
$deneb_open_hours = deneb_gtm( 'deneb_header_open_hours' );

$deneb_button_text   = deneb_gtm( 'deneb_header_button_text' );
$deneb_button_link   = deneb_gtm( 'deneb_header_button_link' );
$deneb_button_target = deneb_gtm( 'deneb_header_button_target' ) ? '_blank' : '_self';
?>
<div class="header-wrapper main-header-four<?php echo ! $deneb_button_text ? ' button-disabled' : ''; ?>">
	<?php if ( $deneb_phone || $deneb_email || $deneb_address || $deneb_open_hours || has_nav_menu( 'social' ) ) : ?>
	<div id="top-header" class="main-top-header-four <?php echo esc_attr( deneb_gtm( 'deneb_header_top_color_scheme' ) ); ?>">
		<div class="site-top-header-mobile">
			<div class="container">
				<button id="header-top-toggle" class="header-top-toggle" aria-controls="header-top" aria-expanded="false">
					<i class="fas fa-bars"></i><span class="menu-label"> <?php esc_html_e( 'Top Bar', 'deneb-dark' ); ?></span>
				</button><!-- #header-top-toggle -->

				<div id="site-top-header-mobile-container">
					<?php if ( $deneb_phone || $deneb_email || $deneb_address || $deneb_open_hours ) : ?>
					<div id="quick-contact">
						<?php get_template_part( 'template-parts/header/quick-contact' ); ?>
					</div>
					<?php endif; ?>

					<?php if ( has_nav_menu( 'social' ) ): ?>
					<div id="top-social">
						<div class="social-nav no-border circle-icon">
							<nav id="social-primary-navigation" class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'deneb-dark' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'social',
										'menu_class'     => 'social-links-menu',
										'depth'          => 1,
										'link_before'    => '<span class="screen-reader-text">',
									) );
								?>
							</nav><!-- .social-navigation -->
						</div>
					</div><!-- #top-social -->
					<?php endif; ?>
				</div><!-- #site-top-header-mobile-container-->
			</div><!-- .container -->
		</div><!-- .site-top-header-mobile -->

		<div class="site-top-header">
			<div class="container">
				<?php if ( $deneb_phone || $deneb_email || $deneb_address || $deneb_open_hours ) : ?>
				<div id="quick-contact" class="pull-left">
					<?php get_template_part( 'template-parts/header/quick-contact' ); ?>
				</div>
				<?php endif; ?>

				<div class="top-head-right pull-right">
					<?php if ( has_nav_menu( 'social' ) ): ?>
					<div id="top-social" class="pull-left">
						<div class="social-nav no-border circle-icon">
							<nav id="social-primary-navigation" class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'deneb-dark' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'social',
										'menu_class'     => 'social-links-menu',
										'depth'          => 1,
										'link_before'    => '<span class="screen-reader-text">',
									) );
								?>
							</nav><!-- .social-navigation -->
						</div>
					</div><!-- #top-social -->
					<?php endif; ?>

					<?php if ( $deneb_button_text ) : ?>
						<a target="<?php echo esc_attr( $deneb_button_target );?>" href="<?php echo esc_url( $deneb_button_link );?>" class="ff-button header-button  pull-left"><?php echo esc_html( $deneb_button_text );?></a>
					<?php endif; ?>


				</div><!-- .top-head-right -->
			</div><!-- .container -->
		</div><!-- .site-top-header -->
	</div><!-- #top-header -->
	<?php endif; ?>

	<header id="masthead" class="site-header main-header-four clear-fix<?php echo deneb_gtm( 'deneb_header_sticky' ) ? ' sticky-enabled' : ''; ?>">
		<div class="container">
			<div class="site-header-main">
				<div class="site-branding">
					<?php get_template_part( 'template-parts/header/site-branding' ); ?>
				</div><!-- .site-branding -->

				<div class="right-head pull-right">
					<div id="main-nav" class="pull-left">
						<?php get_template_part( 'template-parts/navigation/navigation-primary' ); ?>
					</div><!-- .main-nav -->
					<div class="head-search-cart-wrap pull-left">
						<?php if ( function_exists( 'deneb_woocommerce_header_cart' ) ) : ?>
						<div class="cart-contents pull-left">
							<?php deneb_woocommerce_header_cart(); ?>
						</div>
						<?php endif; ?>
						<div class="header-search pull-right">
							<?php get_template_part( 'template-parts/header/header-search' ); ?>
						</div><!-- .header-search -->
					</div><!-- .head-search-cart-wrap -->

				</div><!-- .right-head -->
			</div><!-- .site-header-main -->
		</div><!-- .container -->
	</header><!-- #masthead -->
</div><!-- .header-wrapper -->
