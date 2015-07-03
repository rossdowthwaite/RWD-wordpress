<?php
/**
 * @package WordPress   
 */

get_header(); ?>

	<?php get_template_part( 'blocks/content', 'home' ); ?>
	<?php get_template_part( 'blocks/content', 'flexible' ); ?>
        
<?php get_footer(); ?>