<?php
/**
 * @package WordPress
 */

get_header(); ?>

<div class="row title full-width">
	<header class="fixed-width">
		<h1><?php single_cat_title(); ?></h1>
	</header>
</div>	


<div id="category" class="full-width row">
	<div class="fixed-width">
		<!-- Creates a three column post listing -->
		<?php $count = 0 ?>
		<?php if ( have_posts() ) : while (have_posts() ) : the_post(); $link = get_permalink();?>
			<?php $count++ ?>
			<!-- the post link -->
			<a href="<?php echo $link ?>">
				<section class="column three <?php if($count % 3 == 0) : ?> last<?php endif ?>">

					<!-- Get the category name -->
					<?php $categories = get_the_category(); $cat_name = $categories[0]->cat_name; ?>
					
					<!-- Get the features image -->
					<!-- get the post featured image -->
					<?php the_post_thumbnail(); ?>

					<!-- Show the excerpt -->
						<h2><?php the_title() ?></h2>
					    <p class="post_tags"><?php the_author(); ?> | <?php the_date(); ?></p>
					    <!-- <p class="post_tags"><?php echo $cat_name ?></p> -->
						<?php the_excerpt(); ?>

				</section> 
			</a>
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
			<h3>No post yet! Please check back later</h3>
		<?php endif; ?> 
		<?php wp_reset_postdata(); ?>

	</div>	
</div>	

<?php get_footer(); ?>