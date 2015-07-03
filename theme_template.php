<?php
/**
 * @package WordPress
 * Template Name: theme template 
 */
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Theme Style Guide</title>

<!-- Styles -->
<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/themescripts.js"></script>


<script src="//use.typekit.net/iuw8glm.js"></script>
<script>try{Typekit.load();}catch(e){}</script>

<!-- Mobile Viewport settings -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
</head>
<body>

<script type="text/javascript">
	
	$j( document ).ready(function() {
		var color_one = $j('#color-one').css( "background-color" );
		var color_hex_one = RGBtoHEX(color_one, true);

		var color_two = $j('#color-two').css( "background-color" );
		var color_hex_two = RGBtoHEX(color_two, true);

		var color_three = $j('#color-three').css( "background-color" );
		var color_hex_three = RGBtoHEX(color_three, true);

		var color_four = $j('#color-four').css( "background-color" );
		var color_hex_four = RGBtoHEX(color_four, true);

		var color_five = $j('#color-five').css( "background-color" );
		var color_hex_five = RGBtoHEX(color_five, true);


  		$j( "h5.color_one" ).html(color_hex_one);
  		$j( "h5.color_two" ).html(color_hex_two);
  		$j( "h5.color_three" ).html(color_hex_three);
  		$j( "h5.color_four" ).html(color_hex_four);
  		$j( "h5.color_five" ).html(color_hex_five);	
	});

	function RGBtoHEX(rgb, hash) {
	  var parts = rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
	  delete (parts[0]);
	  for (var i = 1; i <= 3; ++i) {
	    parts[i] = parseInt(parts[i]).toString(16);
	    if (parts[i].length == 1) parts[i] = '0' + parts[i];
	  }
	  return (hash == true ? '#'+parts.join('').toUpperCase() : parts.join('').toUpperCase());
	}

</script>	
<div id="content">
	<div id="colors_" class="full-width">
		    <div id="color-one" class="column five full">
		        <h5>color-one</h5>
		        <h5 class="color_one"></h5>
		    </div>
		    <div id="color-two" class="column five full">
		        <h5>color-two</h5>
		        <h5 class="color_two"></h5>
		    </div>
		    <div id="color-three" class="column five full">
		        <h5>color-three</h5>
		        <h5 class="color_three"></h5>
		    </div>
		    <div id="color-four" class="column five full">
		        <h5>color-four</h5>
		        <h5 class="color_four"></h5>
		    </div>
		    <div id="color-five" class="column five full last">
		        <h5>color-five</h5>
		        <h5 class="color_five"></h5>
		    </div>
	</div>

	<div id="header_">
		<span id="mobile-nav">MENU</span>
		<nav class="full-width">
			<div class='nav'>
				<ul>
					<li><a href="#">link 1</a></li>
					<li><a href="#">link 2</a>
						<ul>
							<li><a href="#">link 1</a></li>
							<li><a href="#">link 2</a></li>
							<li><a href="#">link 3</a></li>
							<li><a href="#">link 4</a></li>
							<li><a href="#">link 5</a></li>
							<li><a href="#">link 6</a></li>
						</ul>
					</li>
					<li><a href="#">link 3</a></li>
					<li><a href="#">link 4</a></li>
					<li><a href="#">link 5</a></li>
					<li><a href="#">link 6</a></li>
				</ul>
			</div>
		</nav>
	</div>

	<div class="full-width">
			<div class="column two full heading1">
				<h1>Heading 1</h1>
				<h2>Heading 2</h2>
				<h3>Heading 3</h3>
				<h4>Heading 4</h4>
				<h5>Heading 5</h5>
			</div>
			<div class="column two full last heading2">
				<h1 class="alt">Heading 1</h1>
				<h2 class="alt">Heading 2</h2>
				<h3 class="alt">Heading 3</h3>
				<h4 class="alt">Heading 4</h4>
				<h5 class="alt">Heading 5</h5>
			</div>
	</div>

	<div id="pcont_" class="full-width">
			<div class="column two full">
				<h3>Paragraph</h3>
				<p>Lorem ipsum dolor sit amet, ex est paulo labores singulis, at aliquam feugiat graecis usu, mei ex tritani percipitur eloquentiam. Audire volumus assueverit an usu, duo ne graece splendide. Eum at ipsum cetero. Mel cibo tritani ea, in quot assum vix. Duo at libris voluptatum, est quod vulputate theophrastus no, est inermis luptatum in. Suas alia brute per ea.</p>
			</div>
			<div id="paragraph_alt" class="column two full last">
				<h3 class="alt">Paragraph - alternate</h3>
				<p class="alt">Lorem ipsum dolor sit amet, ex est paulo labores singulis, at aliquam feugiat graecis usu, mei ex tritani percipitur eloquentiam. Audire volumus assueverit an usu, duo ne graece splendide. Eum at ipsum cetero. Mel cibo tritani ea, in quot assum vix. Duo at libris voluptatum, est quod vulputate theophrastus no, est inermis luptatum in. Suas alia brute per ea.</p>
			</div>
	</div>

	<div id="quote_" class="row full-width">
		<div class="fixed-width">
			<h2 class="alt">Quote style</h2>
			<p class="quote">Lorem ipsum dolor sit amet, ex est paulo labores singulis, at aliquam feugiat graecis usu, mei ex tritani percipitur eloquentiam. Audire volumus assueverit an usu, duo ne graece splendide. Eum at ipsum cetero. Mel cibo tritani ea, in quot assum vix. Duo at libris voluptatum, est quod vulputate theophrastus no, est inermis luptatum in. Suas alia brute per ea.</p>
		</div>
	</div>

	<div id="buttons_" class="row full-width">
		<h2>Button Styles</h2>
		<div class="fixed-width">
		    <div class="column two">
		    	<b class="visually-hidden">Open the navigation</b>
		        <a class="button" href="#">button</a>
		    </div>
		    <div class="column two last">
		    	<b class="visually-hidden">Open the navigation</b>
		        <a class="button alt" href="#">Button</a>
		    </div>
		    <div class="column two">
		    	<b class="visually-hidden">Open the navigation</b>
		        <a class="button alt_two" href="#">button</a>
		    </div>
		    <div class="column two last">
		    	<b class="visually-hidden">Open the navigation</b>
		        <a class="button alt_three" href="#">Button</a>
		    </div>
		</div>
	</div>

	<div id="post-style_" class="row full-width">
		<div class="fixed-width"> 
			<h2>Post Style</h2>
			<p class="post_tags">by Ross Dowthwaite | 12th January 2015</p>
			<p>Lorem ipsum dolor sit amet, ex est paulo labores singulis, at aliquam feugiat graecis usu, mei ex tritani percipitur eloquentiam. Audire volumus assueverit an usu, duo ne graece splendide. Eum at ipsum cetero. Mel cibo tritani ea, in quot assum vix. Duo at libris voluptatum, est quod vulputate theophrastus no, est inermis luptatum in. Suas alia brute per ea.</p>
			<p><b>Bold</b></p>
			<p><strong>Strong</strong></p>
			<p><i>italic</i></p>
		</div>
	</div>

	<div id="forms_" class="full-width">
		<div class="fixed-width">
			
		</div>
	</div>

</div>
</body>
</html>