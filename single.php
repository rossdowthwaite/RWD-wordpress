<?php
/**
 * @package WordPress
 * @subpackage Pixeldot
 */

get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article id="post">

	<!-- get the post featured image -->
	<?php $background = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'actual' ); ?>
	<div class="bg full-width" style="background-image:url(' <?php echo $background[0] ?> ');" >
		<div class="special_title">
		 	<h1 class="alt"><?php the_title() ?></h1>
			<p class="post_tags"><?php the_author(); ?> | <?php the_date(); ?></p> 
		</div>
	</div>

	<div class="row fixed-width content">
		<?php the_content(); ?>
	</div>	

</article>

<?php endwhile; ?>
	<!-- post navigation -->
	<div class="pagination fixed-width">
	  <span class="previous"><?php next_post_link('%link', '< Older posts'); ?></span> |
	  <span class="next"><?php previous_post_link('%link', 'Newer post >'); ?></span>
	  <div class="clear"></div>
	</div>

<?php else: ?>
<!-- no posts found -->
<?php endif; ?>

<?php get_footer(); ?>