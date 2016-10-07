<?php
/*
 * Template Name: Home
 */
?>

<?php

get_header('home');

while(have_posts()) {
	the_post(); ?>

	<?php the_content();
}

get_footer();