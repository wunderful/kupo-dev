	</section> <!-- #content-area --> 

	<?php wp_footer(); ?>
	<footer>
		<section>
			<div class="susy4 no-susy-no">
				<ul>
					<?php dynamic_sidebar( 'footer1_sidebar' ); ?>
				</ul>
			</div>
			<div class="susy4 no-susy-no">
				<ul>
					<?php dynamic_sidebar( 'footer2_sidebar' ); ?>
				</ul>
			</div>
			<div class="susy4 no-susy-no footer-space">
				<ul>
					<?php dynamic_sidebar( 'footer3_sidebar' ); ?>
				</ul>
			</div>
			<div class="susy12 no-susy-no" id="top"><a href="#go-topside">&#8607;</a></div>
		</section>
	</footer>
	<div id="top-bar"></div>

	<!-- SCRIPTS -->
	<script src="/wp-content/themes/kupo-dev/assets/js/jquery-2.1.1.js"></script>
	<script src="/wp-content/themes/kupo-dev/assets/js/animated-headlines.js"></script> <!-- Animated headline -->
	<script src="/wp-content/themes/kupo-dev/assets/js/smooth-scroll.js"></script> <!-- Smooth Scroll jQuery -->
</body>
</html>