<?php
/**
 * @package WordPress
 */

get_header(); ?>
	<!-- the content -->

<div id="page">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php if ( has_post_thumbnail() ) : ?>
	
		<!-- get the post featured image -->
		<?php $background = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'actual' ); ?>
		<div class="bg full-width" style="background-image:url(' <?php echo $background[0] ?> '); height:<?php the_field('header_height') ?>px" >
			<header class="special_title">
				<?php if(get_field('custom_title')) : ?>
					<h1 class="alt"><?php the_field('the_custom_title') ?></h1>
				<?php else : ?>
					<h1 class="alt"><?php the_title() ?></h1>
				<?php endif ?>
			</header>
		</div>
	
	<?php else : ?>

		<div class="row title full-width">
			<header class="fixed-width">
			    <H1><?php the_title() ?></H1>
			</header>
		</div>

	<?php endif ?>

<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>


	<?php get_template_part( 'blocks/content', 'flexible' ); ?>
</div>

<?php get_footer(); ?>