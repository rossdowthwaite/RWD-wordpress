var $j = jQuery.noConflict();

jQuery(document).ready(function($) {
    $j('.tax-filter').click( function(event) {
 
        // Prevent defualt action - opening tag page
        if (event.preventDefault) {
            event.preventDefault();
        } else {
            event.returnValue = false;
        }
 
        // Get tag slug from title attirbute
        var selected_taxonomy = $(this).attr('title');
 
    });
});

jQuery(document).ready(function($) {
    $j('.tax-filter').click( function(event) {
 
        // Prevent default action - opening tag page
        if (event.preventDefault) {
            event.preventDefault();
        } else {
            event.returnValue = false;
        }
 
        // Get tag slug from title attirbute
        var selected_taxonomy = $j(this).attr('title');
 
        // After user click on tag, fade out list of posts
        $j('.tagged-posts').fadeOut();
 
        data = {
            action: 'filter_posts', // function to execute
            afp_nonce: afp_vars.afp_nonce, // wp_nonce
            taxonomy: selected_taxonomy, // selected tag
            };
 
        $j.post( afp_vars.afp_ajax_url, data, function(response) {
 
            if( response ) {
                // Display posts on page
                $('.tagged-posts').html( response );
                // Restore div visibility
                $('.tagged-posts').fadeIn();
            };
        });
    });
});