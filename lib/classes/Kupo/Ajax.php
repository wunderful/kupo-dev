<?php

namespace Kupo;

use Timber;
use WP_Query;
use TimberPost;

defined('ABSPATH') or die('Access Denied');

class Ajax {

	/**
	 * Handle AJAX Requests.
	 */
	public function __construct()
	{
		$this->add_actions();
	}

	/**
	 * Register actions with Wordpress.
	 */
	private function add_actions()
	{
		$this->add_example_actions();
	}

	/**
	 * Add example actions.
	 */
	private function add_example_actions()
	{
		//add_action('wp_ajax_example', array($this, 'example'));
		//add_action('wp_ajax_no_priv_example', array($this, 'example'));	
	}

	/**
	 * Get example loop.
	 */
	public function example()
	{
		/*$args = ['post_type' => 'post'];

		$query = new WP_Query($args);

		while($query->have_posts()) {
			$query->the_post();

			$context = Timber::get_context();
			$context['post'] = new TimberPost();
			Timber::render('partials/content-resources.twig', $context);
		}

		die();*/
	}

}