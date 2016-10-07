<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">

	<link href="https://fonts.googleapis.com/css?family=Muli:300,400|Raleway:400,700|Roboto+Slab:300,400" rel="stylesheet">
	<link rel="stylesheet" href="/wp-content/themes/kupo-dev/assets/css/style.css"> <!-- animated headline stylesheet -->

	<title><?php wp_title('|', true, 'right') ?></title> <?php

	wp_head(); ?>

	<script>
		document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/,'js');
	</script>
</head>

<body id="remove-margin" <?php body_class() ?>><span id="go-topside"></span>

	<header id="header-home">
		<section>
			<div class="susy4 no-susy-no float-left">
				<a href="<?php echo home_url(); ?>"><img src="http://dev.wunderful.co.uk/wp-content/uploads/2016/09/Wunderful_Designs_Logo-_-Print_300dpi-_-Royal_Blue_Version-1024x194.png" alt="Wunderful Designs" width="250" height="auto" /></a>
			</div>
			<div id="page" class="susy8 no-susy-no float-right"> <?php
				wp_nav_menu([
					'theme_location'  => 'primary-navigation',
					'container'       => 'nav',
					'container_class' => 'menu menu--primary',
					'items_wrap'      => '<ul id="%1$s" class="sf-menu %2$s">%3$s</ul>',
				]);
				?>
			</div>
		</section>

		<section id="hero-text"> 
			<div class="susy5 no-susy-no">
				<div class='cd-intro'>
					<h1 class='cd-headline letters type'>
						<span>Better site,<br> more</span>
						<span class='cd-words-wrapper waiting'>
							<b class='is-visible'>views.</b>
							<b>leads.</b>
							<b>sales.</b>
							<b>dosh.</b>
						</span>
					</h1>
				</div>
				<p class='lead'>Here's the lowdown. Our websites are hand crafted by top-notch geeky types, whose sole interest is to make your website wunderful.</p>
				<p><a href='http://dev.wunderful.co.uk/project-enquiry/'><button class='btn-outline'>Submit your project</button></a></p>
			</div>
		</section>
	</header>

	<div id="site-intro">
		<section>
			<div class="susy12 no-susy-no center-content">
				<h1>Top-notch Website Services</h1>
				<p class="lead"">We provide the very best website services such as <a href="http://localhost:8888/services/web-development/">website development</a>, <a href="http://localhost:8888/services/graphic-design/">graphics</a>, <a href="http://localhost:8888/services/hosting-and-emails/">hosting and email</a> and <a href="http://localhost:8888/services/on-going-support/">on-going support</a>.</p>
			</div>
		</section>
	</div><!-- site-intro -->

	<!-- <div class="quick-navbar">
		<section>
			<div class="susy12 center-content">
				<ul class="quick-navbar-list">
					<li><span class="drk-blue">//</span> <a href="#one">The studio</a></li>
					<li><span class="drk-blue">//</span> <a href="#two">Core services</a></li>
					<li><span class="drk-blue">//</span> <a href="#three">Case studies</a></li>
					<li><span class="drk-blue">//</span> <a href="#four">Blog posts</a></li>
				</ul>
			</div>
		</section>
	</div> -->

	<section id="content-area"><!-- HEADER ENDS AND CONTENT-AREA START -->