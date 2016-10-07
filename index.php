<?php

get_header('blog');

if(have_posts()) {
	while(have_posts()) {
		the_post();

		include(locate_template('templates/blog.php'));
	}
}

get_footer();