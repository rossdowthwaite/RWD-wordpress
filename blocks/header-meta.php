<?php
/**
 * @package WordPress
 */
?>

 <!-- Start of Meta -->
<!-- <link rel="schema.dcterms" href="http://purl.org/dc/terms/"> -->
<?php if (is_category()) : ?>
    <meta name="description" content="<?php the_field('seo_description', 'options'); ?> | <?php single_cat_title(); ?>">
    <meta name="dcterms.description" content="<?php the_field('seo_description', 'options'); ?> | <?php single_cat_title(); ?>">
    <meta name="keywords" content="<?php the_field('seo_keywords', 'options'); ?>">
<?php elseif (is_archive()) : ?>
    <meta name="description" content="<?php the_field('seo_description', 'options'); ?> | <?php post_type_archive_title(); ?>">
    <meta name="dcterms.description" content="<?php the_field('seo_description', 'options'); ?> | <?php post_type_archive_title(); ?>">
    <meta name="keywords" content="<?php the_field('seo_keywords', 'options'); ?>">
<?php else : ?>
	<?php if(get_field('seo_description')): ?>
    	<meta name="description" content="<?php the_field('seo_description'); ?>">
       <meta name="dcterms.description" content="<?php the_field('seo_description'); ?>">
    <?php else : ?>
    	<meta name="description" content="<?php the_field('seo_description', 'options'); ?> | <?php the_title(); ?>">
        <meta name="dcterms.description" content="<?php the_field('seo_description', 'options'); ?> | <?php the_title(); ?>">
    <?php endif; ?>
    <?php if(get_field('seo_keywords')): ?>
    	<meta name="keywords" content="<?php the_field('seo_keywords'); ?>">
    <?php else : ?>
    	<meta name="keywords" content="<?php the_field('seo_keywords', 'options'); ?>">
    <?php endif; ?>
<?php endif; ?>


<?php if (is_category()) : ?>
	<meta name="dcterms.title" content="<?php single_cat_title(); ?> | <?php bloginfo( 'title' ); ?> | <?php bloginfo( 'description' ); ?>">
<?php elseif (is_archive()) : ?>
	<meta name="dcterms.title" content="<?php post_type_archive_title(); ?> | <?php bloginfo( 'title' ); ?> | <?php bloginfo( 'description' ); ?>">
<?php else : ?>
	<meta name="dcterms.title" content="<?php the_title(); ?> | <?php bloginfo( 'title' ); ?> | <?php bloginfo( 'description' ); ?>">
<?php endif; ?>

<meta name="dcterms.creator" content="<?php bloginfo( 'title' ); ?>">
<meta name="dcterms.subject" content="Brand, Graphic and Website Design">
<meta name="dcterms.publisher" content="<?php bloginfo( 'title' ); ?>">
<meta name="dcterms.date" content="<?php the_modified_date('Y-m-d'); ?>">
<meta name="dcterms.language" content="en-GB">
<meta name="dcterms.coverage" content="Worldwide">

<!-- Icons -->
<link rel="apple-touch-icon" href="<?php bloginfo( 'template_url' ); ?>/images/icons/touch-icon-iphone.png" />
<link rel="apple-touch-icon" href="<?php bloginfo( 'template_url' ); ?>/images/icons/touch-icon-ipad.png"          sizes="76x76"  />
<link rel="apple-touch-icon" href="<?php bloginfo( 'template_url' ); ?>/images/icons/touch-icon-iphone-retina.png" sizes="120x120"/>
<link rel="apple-touch-icon" href="<?php bloginfo( 'template_url' ); ?>/images/icons/touch-icon-ipad-retina.png"   sizes="152x152"/>
<link rel="shortcut icon"    href="<?php bloginfo( 'template_url' ); ?>/images/icons/favicon.ico" />

<!-- End Meta -->