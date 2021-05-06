<?php
/**
 * Template part for displaying Service
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Deneb
 */

$deneb_enable = deneb_gtm( 'deneb_featured_content_visibility' );

if ( ! deneb_display_section( $deneb_enable ) ) {
	return;
}

$deneb_top_title = deneb_gtm( 'deneb_featured_content_section_top_subtitle' );
$deneb_title        = deneb_gtm( 'deneb_featured_content_section_title' );
$deneb_subtitle     = deneb_gtm( 'deneb_featured_content_section_subtitle' );
?>

<div id="featured-content-section" class="section style-two">
	<div class="section-latest-posts">
		<div class="container">
			<?php if ( $deneb_top_title || $deneb_title || $deneb_subtitle ) : ?>
			<div class="section-title-wrap">
				<?php if ( $deneb_top_title ) : ?>
				<p class="section-top-subtitle"><?php echo esc_html( $deneb_top_title ); ?></p>
				<?php endif; ?>

				<?php if ( $deneb_title ) : ?>
				<h2 class="section-title"><?php echo esc_html( $deneb_title ); ?></h2>
				<?php endif; ?>

				<span class="divider"></span>
				<?php if ( $deneb_subtitle ) : ?>
				<p class="section-subtitle"><?php echo esc_html( $deneb_subtitle ); ?></p>
				<?php endif; ?>

			</div>
			<?php endif; ?>

			<?php get_template_part( 'template-parts/featured-content/post-type' ); ?>
			</div><!-- .container -->
	</div><!-- .section-latest-posts -->
</div><!-- .section -->
