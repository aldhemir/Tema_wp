
( function( $ ) {
		api = wp.customize;
	// Site title.
	api( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.logo h1' ).text( to );
		} );
	} );
	// Site tagline.
	api( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.logo p' ).text( to );
		} );
	} );
} )( jQuery );