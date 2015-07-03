<?php
/**
 * @package WordPress
 * @subpackage Pixeldot
 */
?>

<?php while(has_sub_field("flexible_content")): ?>

	<!-- One Column -->
	<!-- ////////// -->

	<?php if(get_row_layout() == "one_column"): ?>

		<section class="row full-width">
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
		<section class="row full-width <?php the_sub_field('section_class') ?>">
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

				<?php $col_counter = 0 ?>
				<?php while(the_repeater_field('column_two')): ?>
					<?php $col_counter++ ?>
				<?php endwhile; ?>

				<div class="column_set">
				<!-- Loop through the columns -->
				<?php while(the_repeater_field('column_two')): ?>
					<?php $count++ ?>
					
					<section class="column two <?php if($count % 2 == 0): ?> last<?php endif; ?> <?php the_sub_field('column_class') ?>">

						<!-- check for header image -->
						<?php if (get_sub_field('head_image') != "" ): ?>
							<?php $image = get_sub_field('head_image') ?>
							<img src="<?php echo $image ?>" alt="#" class="column_head_image">
						<?php endif; ?>

						<h2><?php the_sub_field('title') ?></h2>
						<?php the_sub_field('content') ?>

						<!-- Buttons -->
						<?php while(has_sub_field("links")): ?>
							<?php if(get_row_layout() == "external_link"): ?>

								<a href="<?php the_sub_field('link_url') ?>" target="_blank" class="<?php the_sub_field('button_style') ?>"><?php the_sub_field('link_title') ?></a>

							<?php elseif(get_row_layout() == "internal_link"): ?>

								<a href="<?php the_sub_field('link_item') ?>" class="<?php the_sub_field('button_style') ?>"><?php the_sub_field('link_title') ?></a>

							<?php endif; ?>
						<?php endwhile; ?>

					</section>

					<?php if($count % 2 == 0): ?>
						</div><!-- end of row -->
						<!-- check if its the end of cols -->
						<?php if ($count == $col_counter): ?>
							<!-- shut it down!  -->
						<?php else: ?>
						<div class="column_set"><!-- more to go, start new set -->
						<?php endif ?>
					<!-- not end of set -->
					<?php else: ?>
						<?php if ($count == $col_counter): ?>
						</div><!-- shut it down -->
						<?php endif; ?>
					<?php endif ?>

				<?php endwhile; ?>
			</div>
		</section>	

	<!-- Three Columns -->
	<!-- ///////////// -->

	<?php elseif(get_row_layout() == "three_column"): ?>
		<?php $count = 0 ?>
		<section class="row full-width <?php the_sub_field('section_class') ?>">
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

				<?php $col_counter = 0 ?>
				<?php while(the_repeater_field('column_three')): ?>
					<?php $col_counter++ ?>
				<?php endwhile; ?>

				<?php $layout = get_sub_field('layout_adjustment') ?>

				<div class="column_set">
				<!-- Loop through the columns -->
				<?php while(the_repeater_field('column_three')): ?>
					<?php $count++ ?>

						<section class="column three <?php if($count % 3 == 0): ?>last<?php endif ?> <?php echo $layout ?> <?php the_sub_field('column_class') ?>">

							<!-- check for header image -->
							<?php if (get_sub_field('head_image') != "" ): ?>
								<?php $image = get_sub_field('head_image') ?>
								<img src="<?php echo $image ?>" alt="#" class="column_head_image">
							<?php endif; ?>

							<?php the_sub_field('content') ?>

							<!-- Buttons -->
							<?php while(has_sub_field("links")): ?>
								<?php if(get_row_layout() == "external_link"): ?>

									<a href="<?php the_sub_field('link_url') ?>" target="_blank" class="<?php the_sub_field('button_style') ?>"><?php the_sub_field('link_title') ?></a>

								<?php elseif(get_row_layout() == "link_internal"): ?>

									<a href="<?php the_sub_field('link_url') ?>" class="<?php the_sub_field('button_style') ?>"><?php the_sub_field('link_title') ?></a>

								<?php endif; ?>
							<?php endwhile; ?>

						</section>

					<?php if($count % 3 == 0): ?>
						</div><!-- end of row -->
						<!-- check if its the end of cols -->
						<?php if ($count == $col_counter): ?>
							<!-- shut it down!  -->
						<?php else: ?>
						<div class="column_set"><!-- more to go, start new set -->
						<?php endif ?>
					<!-- not end of set -->
					<?php else: ?>
						<?php if ($count == $col_counter): ?>
						</div><!-- shut it down -->
						<?php endif; ?>
					<?php endif ?>

				<?php endwhile; ?>
			</div>
		</section>	

	<!-- Four Columns -->
	<!-- ///////////// -->

	<?php elseif(get_row_layout() == "four_column"): ?>
		<?php $count = 0 ?>
		<section class="row full-width <?php the_sub_field('section_class') ?>">
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

				<?php $col_counter = 0 ?>
				<?php while(the_repeater_field('column_four')): ?>
					<?php $col_counter++ ?>
				<?php endwhile; ?>

				<?php $layout = get_sub_field('layout_adjustment') ?>

				<div class="column_set">
				<!-- Loop through the columns -->
				<?php while(the_repeater_field('column_four')): ?>
					<?php $count++ ?>

						<section class="column four <?php if($count % 4 == 0): ?>last<?php endif ?> <?php echo $layout ?>">

							<!-- check for header image -->
							<?php if (get_sub_field('head_image') != "" ): ?>
								<?php $image = get_sub_field('head_image') ?>
								<img src="<?php echo $image ?>" alt="#" class="column_head_image">
							<?php endif; ?>

							<?php the_sub_field('content') ?>

							<!-- Buttons -->
							<?php while(has_sub_field("links")): ?>
								<?php if(get_row_layout() == "external_link"): ?>

									<a href="<?php the_sub_field('link_url') ?>" target="_blank" class="<?php the_sub_field('button_style') ?>"><?php the_sub_field('link_title') ?></a>

								<?php elseif(get_row_layout() == "internal_link"): ?>

									<a href="<?php the_sub_field('link_url') ?>" class="<?php the_sub_field('button_style') ?>"><?php the_sub_field('link_title') ?></a>

								<?php endif; ?>
							<?php endwhile; ?>

						</section>

					<?php if($count % 4 == 0): ?>
						</div><!-- end of row -->
						<!-- check if its the end of cols -->
						<?php if ($count == $col_counter): ?>
							<!-- shut it down!  -->
						<?php else: ?>
						<div class="column_set"><!-- more to go, start new set -->
						<?php endif ?>
					<!-- not end of set -->
					<?php else: ?>
						<?php if ($count == $col_counter): ?>
						</div><!-- shut it down -->
						<?php endif; ?>
					<?php endif ?>

				<?php endwhile; ?>
			</div>
		</section>	

	<!-- Carousel -->
	<!-- //////// -->

	<?php elseif(get_row_layout() == "flexi_carousel"): ?>

		<?php get_template_part( 'blocks/content', 'carousel' ); ?>

	<!--    Map   -->
	<!-- //////// -->

	<?php elseif(get_row_layout() == "flexi_map"): ?>

				<?php $width = get_sub_field('width') ?>
				<?php $location = get_sub_field('map') ?>
				<?php $zoom = get_sub_field('map_zoom') ?>
				<?php $map_id = get_sub_field('map_id') ?>

				<?php if (get_sub_field('disable_all')) : ?>	
					<?php $disable_all = "true" ?>
				<?php else : ?>
					<?php $allow_zoom = get_sub_field('allow_zoom') ?>
					<?php $control_type = get_sub_field('control_type') ?>
					<?php $allow_pan = get_sub_field('allow_pan') ?>
					<?php $allow_street = get_sub_field('allow_street') ?>
					<?php $disable_all = get_sub_field('disable_all') ?>
				<?php endif ?>

				<?php include(locate_template('blocks/content-map.php')); ?> 

 	
 	<?php endif; ?>
<?php endwhile; ?>