//function for converting RGB value to HEX
function rgba2hex( color_value ) { 
	if ( ! color_value ) return false;
	var parts = color_value.toLowerCase().match(/^rgba?\((\d+),\s*(\d+),\s*(\d+)(?:,\s*(\d+(?:\.\d+)?))?\)$/),
	    length = color_value.indexOf('rgba') ? 3 : 2; // Fix for alpha values
	delete(parts[0]);
	for ( var i = 1; i <= length; i++ ) {
		parts[i] = parseInt( parts[i] ).toString(16);
		if ( parts[i].length == 1 ) parts[i] = '0' + parts[i];
	}
	return '#' + parts.join('').toUpperCase(); // #F7F7F7
}

//Read and display the the color value of the swatch above.
$( ".sg-color-swatch" ).each(function( index ) {
	var rgb = $( this ).first().css( "background-color" );
	var hex = rgba2hex(rgb);
$( this ).closest(".sg-color").append( '<div class="sg-color-value">' + hex + '</div>' );
$( this ).closest(".sg-color").append( '<div class="sg-color-value">' + rgb + '</div>' );
});