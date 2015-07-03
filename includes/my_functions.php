<!-- /////////////////////////////////////////////// -->
<!-- ??				  							  ?? -->
<!-- ??				  MY FUNCTIONS				  ?? -->
<!-- ??				  							  ?? -->
<!-- /////////////////////////////////////////////// -->
<!-- 												 -->
<!-- 		Usefeul homemade theme functions		 -->
<!-- 												 -->
<!-- =============================================== -->
<!-- \/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\ -->

<?php  

	// 
	//	Returns all category as links
	// 

	function tags_filter() {
	    $tax = 'category';
	    $terms = get_terms( $tax );
	    $count = count( $terms );
	 
	    if ( $count > 0 ): ?>
	        <div class="post-tags">
		        <?php
		        foreach ( $terms as $term ) {
		            $term_link = get_term_link( $term, $tax );
		            echo '<a href="' . $term_link . '" class="tax-filter" title="' . $term->slug . '">' . $term->name . '</a> ';
		        } ?>
	        </div>
	    <?php endif;
	}

	function repeater_count($repeater_name) {
		$col_counter = 0 
		while(the_repeater_field($repeater_name)) {
			 $col_counter++ 
		}
		return $col_counter
	}
?>