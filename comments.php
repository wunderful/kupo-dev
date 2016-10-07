<?php

if(post_password_required()) { ?>
	<p class="lead">Post is password protected. Enter the password to view any comments.'</p> <?php

	return;
}

if(have_comments()) { ?>
	<h5><?php comments_number(); ?></h5>

	<ul> <?php
		wp_list_comments(); ?>
	</ul> <?php
}

comment_form();