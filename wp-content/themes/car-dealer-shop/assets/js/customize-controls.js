( function( api ) {

	// Extends our custom "car-dealer-shop" section.
	api.sectionConstructor['car-dealer-shop'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );