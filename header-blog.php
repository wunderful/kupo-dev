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

	<header id="header-blog">
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
		
		<section id="title-paragraph" class="block">
			<div class="susy12 no-susy-no">
				<h1><?php the_title(); ?></h1>
				<?php if ( is_page('blog') ) { ?>
				<p class="lead">Our blog posts are all about design, development, new geeky stuff and updates about our business.</p>
				<?php } else { ?>
				<p class="postmetadata">Posted in <?php the_category( ', ' ); ?> on <?php the_time('F jS, Y'); ?></p>
				<?php } ?>
			</div>
		</section>
	</header>

	<div id="breadcrumb-bar" class="blog-breadcrumb-bar">
		<section>
			<div class="susy12 no-susy-no">
				<?php if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb('
				<p id="breadcrumbs" class="small">','</p>
				');
				} ?>
			</div>
		</section>
	</div>
	
	<section id="content-area"><!-- HEADER ENDS AND CONTENT-AREA START -->