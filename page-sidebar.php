<?php 
/*
	Template Name: sidebar
*/
?>

<?php

get_header();

if(have_posts()) {
	while(have_posts()) {
		the_post();

		include(locate_template('templates/content-sidebar.php'));
	}
}

get_footer();