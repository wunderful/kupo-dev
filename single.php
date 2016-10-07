<?php

get_header();

while(have_posts()) {
	the_post();

	include(locate_template('templates/content.php'));

	if(comments_open() || get_comments_number()) {
		comments_template();
	}
}

get_footer();