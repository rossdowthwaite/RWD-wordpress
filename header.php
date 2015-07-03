<?php
/**
 * @package WordPress
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
?></title>

<?php get_template_part( 'blocks/header', 'meta' ); ?>

<!-- Make HTML5 elements backwards compatible -->
<!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Viewport -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>

<?php wp_head();?>
</head>
<body <?php body_class(); ?>>

<!-- Navigation -->
<div id="header-span" class="full-width">  
	<header>
        <a class="logo" href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'title' ); ?>, <?php bloginfo( 'description' ); ?></a>
	    <span id="mobile-nav"><i class="fa fa-bars fa-2x"></i></span>
	    <?php wp_nav_menu( array( 'container_class' => 'nav header_menu', 'theme_location' => 'primary' ) ); ?>
	</header>
</div>

<!-- Homepage Hero -->
<?php if (is_front_page()) : ?>
	<?php get_template_part( 'blocks/content', 'hero' ); ?>
<?php endif; ?>

<!-- content starts -->

<main id="content" class="">