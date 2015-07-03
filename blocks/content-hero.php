<?php
/**
 * @package WordPress
 */
?>

<?php if(get_field('carousel')): ?>

    <!-- hero starts -->
    <div id="hero" class="full-width">
    	<div id="hero-carousel" class="full-width">
          <?php while(the_repeater_field('carousel')): ?>
            	<?php $image = wp_get_attachment_image_src(get_sub_field('image'), 'hero'); ?>
           		<div class="carousel-slide full-width" style="background-image:url(<?php echo $image[0]; ?>)">

                <!-- Slide content -->

              </div>
           	<?php endwhile; ?>
    	</div>
    </div>

    <!-- bx slider options -->
    <script>
    jQuery(document).ready(function(){
      jQuery('#hero-carousel').bxSlider({
        auto: true,
        speed: 3000,
        pause: 5000,
        pager: false,
        mode: 'fade',
        controls: false,
      });
    });
    </script>

<?php endif; ?>

<!-- Top Anchor -->
<a id="#top"></a>