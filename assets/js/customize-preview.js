/**
 * File customize-preview.js.
 *
 * Instantly live-update customizer settings in the preview for improved user experience.
 */

(function( $ ) {

	wp.customize( 'primary_color', function( value ) {
		value.bind( function( to ) {
			update_preview_color_values({
				stylesheetID: '#custom-theme-colors',
				color: to,
			});
		});
	});

	function update_preview_color_values( options ) {
		if ( ! options.stylesheetID || ! options.color ) {
			throw new Error('Please provide object with required options.')
		} 

		var style = $( options.stylesheetID );
		var css = style.html();
		var dataColor = style.data( 'color' );
		var newColor = get_hex_from_color_name( options.color );

		css = css.split( dataColor ).join( newColor );
		style.html( css ).data( 'color', newColor );

	}

	function get_hex_from_color_name( color ) {
		switch ( color ) {
			case 'yellow':
				return '#ffcd00';
				break;

			case 'red':
				return '#f44336';
				break;

			case 'green':
				return '#8bc34a';
				break;

			case 'lightblue':
				return '#03a9f4';
				break;

			case 'purple':
				return '#9c27b0';
				break;

			default:
				return '#ffcd00';
		}
	}

} )( jQuery );