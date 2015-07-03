<?php
/**
 * @package WordPress
 */
?>

<?php $section = 0 ?>
<?php while(has_sub_field("flexible_content")): ?>
	<?php $section++ ?>

	<!-- One Column -->
	<!-- ////////// -->

	<?php if(get_row_layout() == "one_column"): ?>

		<section class="row full-width section_<?php echo $section ?>">
			<div class="fixed-width">
				<div class="column one <?php the_sub_field('section_class') ?>">
					<?php the_sub_field('content') ?>
				</div>
			</div>
		</section>	
	
	<!-- Two Columns -->
	<!-- /////////// -->

	<?php elseif(get_row_layout() == "column_two"): ?>

		<?php $count = 0 ?>
		<section class="row full-width section_<?php echo $section ?>">
			<div class="fixed-width column_two">

				<?php if(get_sub_field('section_header')) : ?>
					<header class="section_header">
						<!-- Check for section title -->
						<?php if (get_sub_field('column_two_title') != ""): ?>
							<h2><?php the_sub_field('column_two_title') ?></h2>
						<?php endif; ?>

						<!-- Check for section title -->
						<?php if (get_sub_field('section_description') != ""): ?>
							<?php the_sub_field('section_description') ?>
						<?php endif; ?>
					</header>
				<?php endif ?>

				<!-- Get the total column count -->
				<?php $col_counter = repeater_count('column_two'); ?>

				<div class="column_set">
				<!-- Loop through the columns -->
				<?php $count = 0 ?>
				<?php while(the_repeater_field('column_two')): ?>
					<?php $count++ ?>
					
					<section class="column two <?php if($count % 2 == 0): ?> last<?php endif; ?> section_<?php echo $section ?>_<?php echo $count ?>">

						<!-- check for header image -->
						<?php if (get_sub_field('head_image') != "" ): ?>
							<?php $image = get_sub_field('head_image') ?>
							<img src="<?php echo $image ?>" alt="#" class="column_head_image">
						<?php endif; ?>

						<h2><?php the_sub_field('title') ?></h2>
						<?php the_sub_field('content') ?>

						<!-- Buttons -->
						<?php get_template_part( 'blocks/content', 'links' ); ?>

					</section>

					<?php if($count % 2 == 0): ?>
						<div class="clear"></div>
					<?php endif ?>

				<?php endwhile; ?>
			</div>
		</section>	

	<!-- Three Columns -->
	<!-- ///////////// -->

	<?php elseif(get_row_layout() == "three_column"): ?>
		<section class="row full-width section_<?php echo $section ?>">
			<div class="fixed-width column_three">	

				<?php if(get_sub_field('section_header')) : ?>
					<div class="section_header">			
						<!-- Check for section title -->
						<?php if (get_sub_field('colum_three_title') != ""): ?>
							<h1><?php the_sub_field('colum_three_title') ?></h1>
						<?php endif; ?>

						<!-- Check for section title -->
						<?php if (get_sub_field('section_description') != ""): ?>
							<?php the_sub_field('section_description') ?>
						<?php endif; ?>
					</div>
				<?php endif; ?>

				<!-- Get the total column count -->
				<?php $col_counter = repeater_count('column_three'); ?>

				<!-- responsive styling -->
				<?php $layout = get_sub_field('layout_adjustment') ?>

				<div class="column_set">
				<!-- Loop through the columns -->
				<?php $count = 0 ?>
				<?php while(the_repeater_field('column_three')): ?>
					<?php $count++ ?>

						<section class="column three <?php if($count % 3 == 0): ?>last<?php endif ?> <?php echo $layout ?> section_<?php echo $section ?>_<?php echo $count ?>">

							<!-- check for header image -->
							<?php if (get_sub_field('head_image') != "" ): ?>
								<?php $image = get_sub_field('head_image') ?>
								<img src="<?php echo $image ?>" alt="#" class="column_head_image">
							<?php endif; ?>

							<?php the_sub_field('content') ?>

							<!-- Buttons -->
							<?php get_template_part( 'blocks/content', 'links' ); ?>

						</section>

					<?php if($count % 3 == 0): ?>
						<div class="clear"></div>
					<?php endif ?>

				<?php endwhile; ?>
			</div>
		</section>	

	<!-- Four Columns -->
	<!-- ///////////// -->

	<?php elseif(get_row_layout() == "four_column"): ?>

		<section class="row full-width section_<?php echo $section ?>">
			<div class="fixed-width column_three">	

				<?php if(get_sub_field('section_header')) : ?>
					<header class="section_header">			
						<!-- Check for section title -->
						<?php if (get_sub_field('colum_four_title') != ""): ?>
							<h1><?php the_sub_field('colum_four_title') ?></h1>
						<?php endif; ?>

						<!-- Check for section title -->
						<?php if (get_sub_field('section_description') != ""): ?>
							<?php the_sub_field('section_description') ?>
						<?php endif; ?>
					</header>
				<?php endif; ?>

				<!-- Get the total column count -->
				<?php $col_counter = repeater_count('column_four'); ?>
				
				<!-- responsive styling -->
				<?php $layout = get_sub_field('layout_adjustment') ?>

				<div class="column_set">
				<!-- Loop through the columns -->
				<?php $count = 0 ?>
				<?php while(the_repeater_field('column_four')): ?>
					<?php $count++ ?>

						<section class="column four <?php if($count % 4 == 0): ?>last<?php endif ?> <?php echo $layout ?> section_<?php echo $section ?>_<?php echo $count ?>">

							<!-- check for header image -->
							<?php if (get_sub_field('head_image') != "" ): ?>
								<?php $image = get_sub_field('head_image') ?>
								<img src="<?php echo $image ?>" alt="#" class="column_head_image">
							<?php endif; ?>

							<?php the_sub_field('content') ?>

							<!-- Buttons -->
							<?php get_template_part( 'blocks/content', 'links' ); ?>

						</section>

					<?php if($count % 4 == 0): ?>
						<div class="clear"></div>
					<?php endif ?>

				<?php endwhile; ?>
			</div>
		</section>	

	<!-- Carousel -->
	<!-- //////// -->

	<?php elseif(get_row_layout() == "flexi_carousel"): ?>

		<?php get_template_part( 'blocks/content', 'carousel' ); ?>

 	<?php endif; ?>
<?php endwhile; ?>