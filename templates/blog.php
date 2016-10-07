<div id="blog-list-page" class="block">
	<div class="susy8 no-susy-no">
		<?php 
		// the query
		$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

		<?php if ( $wpb_all_query->have_posts() ) : ?>

			<!-- the loop -->
			<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
				<div class="post-list">
					<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
					<p><?php the_excerpt() ?></p>
				</div>
			<?php endwhile; ?>
			<!-- end of the loop -->

			<?php wp_reset_postdata(); ?>

		<?php else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</div>

	<div class="susy4 no-susy-no">
		<div class="tilted-sidebar">
			<?php dynamic_sidebar('blog-sidebar'); ?>
		</div>
	</div>
</div>