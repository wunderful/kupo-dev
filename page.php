<?php

get_header();

while(have_posts()) {
	the_post(); ?>
	
	<h1 class="center-content main-heading"><?php the_title(); ?></h1>

	<?php the_content(); }

get_footer();