<?php
/**
 * @package WordPress
 * @subpackage Pixeldot
 */
?>
<?php if(get_field('carousel')): ?>
<!-- hero starts -->
<div class="<?php the_sub_field('width') ?> carousel">
	<div id="<?php echo the_sub_field('carousel_id') ?>" class="full-width">
      <?php while(the_repeater_field('carousel')): ?>
        	<?php $image = wp_get_attachment_image_src(get_sub_field('image'), 'actual'); ?>
       		<div class="carousel-slide full-width" style="background-image:url(<?php echo $image[0]; ?>)">
                  <?php if(get_sub_field('title')) : ?>
                      <div class="special_title">
                          <h1 class="alt"><?php the_sub_field('title') ?></h1>
                      </div>
                  <?php endif ?>
            </div>
       	<?php endwhile; ?>
	</div>
</div>

<!-- hero ends -->

<script>
jQuery(document).ready(function(){
  jQuery('#<?php echo the_sub_field('carousel_id') ?>').bxSlider({
  	auto: <?php the_field('disable_auto_slide'); ?>,
  	speed: <?php the_field('speed'); ?>,
  	pause: <?php the_field('pause_time'); ?>,
  	pager: <?php the_field('pager') ?>,
    mode: '<?php echo the_field('transition') ?>',
  	controls: <?php the_field('controls') ?>,
  });
});
</script>

<?php endif; ?>

<?php if(get_field('disable_auto_slide')): ?>
<?php endif; ?>