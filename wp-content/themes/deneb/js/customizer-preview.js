/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		});
	});

	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		});
	});

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				});
			} else {
				$( '.site-title, .site-description' ).css( {
					'clip': 'auto',
					'position': 'relative'
				});
				$( '.site-title a, .site-description' ).css( {
					'color': to
				});
			}
		});
	});

	// Color Scheme.
	wp.customize( 'deneb_color_scheme', function( value ) {
		value.bind( function( to ) {
			$( 'body' ).removeClass( 'default-color-scheme dark-color-scheme' );

			$( 'body' ).addClass( to + '-color-scheme' );
		});
	});

	// Site Layout.
	wp.customize( 'deneb_layout_type', function( value ) {
		value.bind( function( to ) {
			$( 'body' ).removeClass( 'boxed-layout fluid-layout' );

			$( 'body' ).addClass( to + '-layout' );
		});
	});
})( jQuery );
