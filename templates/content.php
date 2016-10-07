<h1><?php the_title(); ?></h1>

<?php

if(is_single()) {
	the_content();
}
else {
	the_excerpt();
}

?>