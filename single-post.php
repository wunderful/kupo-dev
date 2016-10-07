<?php

get_header('blog');

while(have_posts()) {
	the_post();

	include(locate_template('templates/content-blog.php'));

	if(comments_open() || get_comments_number()) {
		comments_template();
	}
}

get_footer();