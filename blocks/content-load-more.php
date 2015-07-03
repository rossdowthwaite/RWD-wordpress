<?php
/**
 * @package WordPress
 * @subpackage Pixeldot
 */
?>

<div id="posts">
	<div id="loaded_posts" class="fixed-width">

		<?php 

		$args = array (
			'post_type'              => 'post',
			'posts_per_page' 		 => 3,
		);

		$query = new WP_Query( $args ); ?>

		<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

			<?php $background = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
			<div class="column three filter">
				<div class="column one bg post_thumb" style="background-image:url(' <?php echo $background[0] ?> ');" ></div>

				<h2><?php the_title(); ?></h2>

			</div>

		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<!-- no posts found -->
		<?php endif; ?> 

	</div>
</div>
<div id="post_count">3</div>
<a id="load_more" href="#" class="button">Load More Posts</a>