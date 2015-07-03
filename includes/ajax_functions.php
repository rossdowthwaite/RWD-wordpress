<?php 

	// AJAX STUFF.......

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

	function ajax_filter_posts_scripts() {
	  // Enqueue script
	  wp_register_script('afp_script', get_template_directory_uri() . '/scripts/extensions/ajax-filter-posts.js', false, null, false);
	  wp_enqueue_script('afp_script');
	 
	  wp_localize_script( 'afp_script', 'afp_vars', array(
	        'afp_nonce' => wp_create_nonce( 'afp_nonce' ), // Create nonce which we later will use to verify AJAX request
	        'afp_ajax_url' => admin_url( 'admin-ajax.php' ),
	      )
	  );
	}
	add_action('wp_enqueue_scripts', 'ajax_filter_posts_scripts', 100);

	// Script for getting posts
	function ajax_filter_get_posts( $taxonomy ) {

	  // Verify nonce
	  if( !isset( $_POST['afp_nonce'] ) || !wp_verify_nonce( $_POST['afp_nonce'], 'afp_nonce' ) )
	    die('Permission denied');
	 
	  $taxonomy = $_POST['taxonomy'];
	 
	  // WP Query
	  $args = array(
	    'category_name' => $taxonomy,
	    'post_type' => 'post',
	    'posts_per_page' => 10,
	  );
	 echo '<h1>' . $taxonomy . '</h1>';
	  // If taxonomy is not set, remove key from array and get all posts
	  if( !$taxonomy ) {
	    unset( $args['tag'] );
	  }
	 
	  $query = new WP_Query( $args );
	 
	  if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); $link = get_permalink(); ?>
	 
		<a href="<?php echo $link ?>">
			<!-- get the post featured image -->
			<?php $background = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
			<section class="column three filter">
				<div class="column one bg post_thumb" style="background-image:url(' <?php echo $background[0] ?> ');" ></div>
				<!-- Get the category name -->
				<?php $categories = get_the_category(); $cat_name = $categories[0]->cat_name; ?>

				<!-- Show the excerpt -->
					<h2><?php the_title() ?></h2>
				    <p class="post_tags"><?php the_author(); ?> | <?php the_date(); ?></p>
				    <!-- <p class="post_tags"><?php echo $cat_name ?></p> -->
					<?php the_excerpt(); ?>

			</section> 
		</a>
	 
	  <?php endwhile; ?>
	  <?php else: ?>
	    <h2>No posts found</h2>
	  <?php endif;
	 
	  die();
	}
 
add_action('wp_ajax_filter_posts', 'ajax_filter_get_posts');
add_action('wp_ajax_nopriv_filter_posts', 'ajax_filter_get_posts');


// load More Posts AJAX 

add_action( 'wp_ajax_nopriv_ajax_pagination', 'my_ajax_pagination' );
add_action( 'wp_ajax_ajax_pagination', 'my_ajax_pagination' );

function my_ajax_pagination() {

	$post_count = $_POST['post_count'];

	echo '<div id="loaded_posts" class="fixed-width">';

	// WP Query
	  $args = array(
	    'post_type' => 'post',
	    'posts_per_page' => $post_count,
	  );
	 
	  $load_query = new WP_Query( $args );
	 
	  if ( $load_query->have_posts() ) : while ( $load_query->have_posts() ) : $load_query->the_post(); $link = get_permalink(); ?>
	 
		<a href="<?php echo $link ?>">
			<!-- get the post featured image -->
			<?php $background = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
			<section class="column three filter">
				<div class="column one bg post_thumb" style="background-image:url(' <?php echo $background[0] ?> ');" ></div>

				<!-- Show the excerpt -->
					<h2><?php the_title() ?></h2>
				    <p class="post_tags"><?php the_author(); ?> | <?php the_date(); ?></p>
				    <!-- <p class="post_tags"><?php echo $cat_name ?></p> -->
					<?php the_excerpt(); ?>

			</section> 
		</a>
	 
	  <?php endwhile; ?>
	  <?php else: ?>
	    <h2>No posts found</h2>
	  <?php endif;

	echo '</div>';

    die();
}

 ?>