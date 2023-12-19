( function( api ) {

	// Extends our custom "drilling-services" section.
	api.sectionConstructor['drilling-services'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );