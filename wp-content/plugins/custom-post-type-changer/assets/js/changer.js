jQuery( document ).ready(function($){
	$( 'body' ).on( 'click', 'input[name="bulk_edit"]', function() {
 
		// define: Post_types and the bulk edit table row
		var bulk_edit_row = $( 'tr#bulk-edit' ),
		    post_ids = new Array()
		    Post_type = bulk_edit_row.find( 'select[name="Post_type"]' ).val(),
 
		// now we have to obtain the post IDs selected for bulk edit
		bulk_edit_row.find( '#bulk-titles' ).children().each( function() {
			post_ids.push( $( this ).attr( 'id' ).replace( /^(ttle)/i, '' ) );
		});
 
		// save the data with AJAX
		$.ajax({
			url: ajaxurl,
			type: 'POST',
			async: false,
			cache: false,
			data: {
				action: 'andola_save_bulk', // wp_ajax action hook
				post_ids: post_ids, // array of post IDs
				Post_type: Post_type, // new Post_type
				nonce: $('#andola_nonce').val() //  nonce from hidden #andola_nonce field
			}
		});
	});
});
