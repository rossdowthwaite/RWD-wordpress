<?php
/**
 * @package WordPress
 */
?>
<?php while(has_sub_field("links")): ?>
	<?php if(get_row_layout() == "external_link"): ?>

		<a href="<?php the_sub_field('link_url') ?>" target="_blank" class="<?php the_sub_field('button_style') ?>"><?php the_sub_field('link_title') ?></a>

	<?php elseif(get_row_layout() == "internal_link"): ?>

		<a href="<?php the_sub_field('link_item') ?>" class="<?php the_sub_field('button_style') ?>"><?php the_sub_field('link_title') ?></a>

	<?php elseif(get_row_layout() == "scroll_to"): ?>

		<a href="#<?php the_sub_field('scroll_to_id') ?>" class="<?php the_sub_field('button_style') ?> scroll-link"><?php the_sub_field('link_title') ?></a>

	<?php endif; ?>
<?php endwhile; ?>
