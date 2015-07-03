<?php
/**
 * @package WordPress
 * @subpackage Pixeldot
 * Template Name: Login Page
 */

get_header(); ?>

	<?php $args = array('redirect' => get_permalink( get_page(25) )); ?>

	<?php if(isset($_GET['login']) && $_GET['login'] == 'failed') : ?>

		<div id="login-error" style="background-color: #FFEBE8;border:1px solid #C00;padding:5px;">
			<p>Login failed: You have entered an incorrect Username or password, please try again.</p>
		</div>

	<?php endif ?>

	<?php wp_login_form( $args ); ?> 

<?php get_footer(); ?>