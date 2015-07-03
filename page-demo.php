<?php
/**
 * @package WordPress
 * @subpackage Pixeldot
 * Template Name: Demo 
 */

get_header(); ?>

<div id="page">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<div class="row title full-width">
			<header class="fixed-width">
			    <H1><?php the_title() ?></H1>
			    <p><?php the_content(); ?></p>
			</header>
		</div>

<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>
 

	<?php if(is_page(25)) : ?>

		<?php get_template_part( 'blocks/content', 'ajax-filter' ); ?>

	<?php elseif(is_page(50)): ?>

		<?php get_template_part( 'blocks/content', 'isotope-filter' ); ?>

	<?php elseif(is_page(44)): ?>

		<?php get_template_part( 'blocks/content', 'slider' ); ?>

	<?php elseif(is_page(61)): ?>

		<?php get_template_part( 'blocks/content', 'load-more' ); ?>

	<?php elseif(is_page(81)): ?>

		<?php get_template_part( 'blocks/content', 'canvas_pan' ); ?>

	<?php elseif(is_page(85)): ?>

		<?php get_template_part( 'blocks/content', 'radial_ticker' ); ?>

	<?php endif ?>

</div>

<?php get_footer(); ?>