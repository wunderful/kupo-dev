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
		<?php dynamic_sidebar('blog-sidebar'); ?>
	</div>
</div>
</div>