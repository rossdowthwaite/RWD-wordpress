<?php
/**
 * @package WordPress
 * @subpackage Pixeldot
 */

get_header(); ?>

<!-- content starts -->

<div id="page" class="full-width row">
	<div class="fixed-width">
        <div class="column one">
        <h1><?php the_title(); ?></h1>      
        </div>
    </div>
   	<div class="row fixed-width">
        <div class="column two">
            <h2>Pages</h2>
            <ul>
                <?php wp_list_pages('title_li=0'); ?>
            </ul>
        </div>
        <div class="column two last">
            
            <div class="clear"></div>
        </div>
    </div>
</div>

<!-- content end -->



<?php get_footer(); ?>