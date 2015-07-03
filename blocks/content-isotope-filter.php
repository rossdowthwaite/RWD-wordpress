<?php
/**
 * @package WordPress
 * @subpackage Pixeldot
 */
?>

<!-- uses isotope.js to filter the posts -->

<div class="fixed-width">

	<div id='filters' class="post-tags">
	    <?php
	        $terms = get_terms('category');
	        $count = count($terms);
	            echo '<a href="javascript:void(0)" title="" data-filter=".all" class="active">All</a>';
	        if ( $count > 0 ){
	 
	            foreach ( $terms as $term ) {
	 
	                $termname = strtolower($term->name);
	                $termname = str_replace(' ', '-', $termname);
	                echo '<a href="javascript:void(0)" title="" data-filter=".'.$termname.'">'.$term->name.'</a>';
	            }
	        }
	    ?>
	</div>

	<div id="portfolio">
	 
		<?php

		$args = array( 'posts_per_page' => -1 );
		$loop = new WP_Query( $args );

		?>
		<?php $post_count = 0 ?>
		<?php if ( $loop->have_posts() ) : ?> 
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<?php $post_count++ ?>
				<!-- Get th post tags and store them in a array -->
				<?php  
					$terms = get_the_terms( $post->ID, 'category' );	
					if ( $terms && ! is_wp_error( $terms ) ) : 
						$links = array();
						foreach ( $terms as $term ) {
						    $links[] = $term->name;
						}
						// replace white space with dash and set to lowercase
						$tax_links = join( " ", str_replace(' ', '-', $links));          
						$tax = strtolower($tax_links);
					else :		
						$tax = '';					
					endif; 
				?>
				<?php $background = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
				<div class="column three filter all item <?php echo $tax ?>">
					<div class="column one bg post_thumb" style="background-image:url(' <?php echo $background[0] ?> ');" ></div>
					<h2><?php the_title(); ?></h2>
					<p><?php the_excerpt(); ?></p>
				</div>

			<?php endwhile; ?>
			<!-- post navigation -->
			<?php else: ?>
			<!-- no posts found -->
		<?php endif; ?> 
	 
	</div>

</div>