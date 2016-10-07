
<?php

get_header('blog');

?>

<?php

if(have_posts()) {
	while(have_posts()) {
		the_post();

		include(locate_template('templates/category.php'));
	}
}

get_footer();