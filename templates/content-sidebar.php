<h1 class="center-content main-heading"><?php the_title(); ?></h1>

<div id="single-post" class="block">
<div class="susy8 no-susy-no">
	<?php

	if(is_single()) {
		the_content();
	}
	else {
		the_excerpt();
	}

	?>
</div>

<div class="susy4 no-susy-no">
	<div class="tilted-sidebar">
		<?php if ( is_page( 'Web Development' ) && function_exists('dynamic_sidebar')) {
	    	dynamic_sidebar('website_sidebar');
		} ?>
		<?php if ( is_page( 'Graphic Design' ) && function_exists('dynamic_sidebar')) {
	    	dynamic_sidebar('graphics_sidebar');
		} ?>
		<?php if ( is_page( 'Hosting and Emails' ) && function_exists('dynamic_sidebar')) {
	    	dynamic_sidebar('hosting_sidebar');
		} ?>
		<?php if ( is_page( 'On-going Support' ) && function_exists('dynamic_sidebar')) {
	    	dynamic_sidebar('support_sidebar');
		} ?>
	</div>
</div>
</div>